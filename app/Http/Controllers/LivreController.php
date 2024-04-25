<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\User;
use App\Models\Emprunt;
use App\Models\Lecteur;

class LivreController extends Controller
{   

//-------------  Start   Controller for Livres ----------------------------------------------------------------------
    public function liste_livre2 (){
    $livre = Livre::where('Book_State', 'Disponible')->paginate(5);
    return view('indexlivre2', compact('livre'));
    }
    public function searchlivre2(Request $request)
        {   

            $output = "";
            $livre = Livre::where('Title', 'Like', '%'.$request->searchlivre2.'%')->orWhere('Author', 'Like', '%'.$request->searchlivre2.'%')->get();
            $ide = 1;
            foreach($livre as $rs){
                $output .=
                '<tr>
                <td>'.$ide.'</td>
                <td>'.$rs->Title.'</td>
                <td>'.$rs->Author.'</td>
                <td>'.$rs->Page_Number.'</td>
                <td>'.$rs->Book_Quality.'</td>
                <td>'.$rs->Edition.'</td>
                <td>'.$rs->Type.'</td>
                <td>'.$rs->Book_State.'</td>

                <td>'.'
                <a href="/emprunt/'.$rs -> id.' " class="btn btn-info">'.'Emprunt</a>
                '.'</td> 
                </tr>';
            }
            $ide += 1;
            return response($output);
        }
//-------------  End   Controller for Livres-------------------------------------------------------------------------
    

        public function index1(){
            return view('lecteur'); // Nom du fichier de vue pour la page lecteur (lecteur.blade.php)
        }

        public function store1(Request $request)
        {
            $request->validate([
                'Name' => 'required',
                'FirstName' => 'required',
                'Email' => 'required|email|unique:lecteurs',
                'Password' => 'required',
                'Function' => 'required',
        ]); 
    
        // Créer une nouvelle instance du modèle avec les données validées
        $lecteur = new Lecteur;
        $lecteur->Name = $request->input('Name');
        $lecteur->FirstName = $request->input('FirstName');
        $lecteur->Email = $request->input('Email');
        $lecteur->Password = $request->input('Password');
        $lecteur->Function = $request->input('Function');
        $lecteur->save();
        // Redirigez l'utilisateur après l'enregistrement
        return redirect('/home')->with('success', 'Lecteur enregistré avec succès!');
    }
//-------------  Start   Controller for Readers----------------------------------------------------------------------


//-------------  Start   Controller for Products in Dashboard-------------------------------------------------------
    public function index (){
        $livre = Livre::orderBy('created_at', 'DESC')->get();
        return view ('products.index', compact('livre'));
    }
    public function create (){
        return view ('products.create');
    }
    public function store (Request $request){
        Livre::create($request->all());
        return redirect()->route('products')->with('success', 'Books added successfully');
    }
    public function show (string $id){
        $livre = Livre::findOrFail($id);
        return view ('products.show', compact('livre'));
    }
    public function edit (string $id){
        $livre = Livre::findOrFail($id);
        return view ('products.edit', compact('livre'));
    }
    public function update (Request $request, string $id){
        $livre = Livre::findOrFail($id);
        $livre->update($request->all());
        return redirect()->route ('products')->with('success', 'Books updated successfully');;
    }
    public function destroy (Request $request, string $id){
        $livre = Livre::findOrFail($id);
        $livre->delete();
        return redirect()->route ('products')->with('success', 'Books deleted successfully');;
    }
//-------------  End  Controller for Products in Dashboard-------------------------------------------------------------------


//-------------  Start   Controller for Readers in Dashboard-------------------------------------------------------------------

public function indexr (){
    $lecteur = Lecteur::orderBy('created_at', 'DESC')->get();
    return view ('readers.indexreader', compact('lecteur'));
}
public function showr (string $id){
    $lecteur = Lecteur::findOrFail($id);
    return view ('readers.showreader', compact('lecteur'));
}
public function destroyr (Request $request, string $id){
    $lecteur = Lecteur::findOrFail($id);
    $lecteur->delete();
    return redirect()->route ('readers')->with('success', 'Readers deleted successfully');;
}

//-------------  End   Controller for Readers in Dashboard-------------------------------------------------------







//-------------  Start   Controller for Emprunt-------------------------------------------------------------------
public function indexEmprunt(){
    return view('livres_empruntes'); // Nom du fichier de vue pour la page lecteur (lecteur.blade.php)
}

public function createForm()
    {
        $users = User::all();
        $books = Livre::all();
        return view('emprunt', compact('users', 'books'));
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:livres,id',
            'DateEmprunt' =>'required',
            'DateRetour' =>'required'
        ]);

        DB::transaction(function () use ($request) {
            $book = Livre::findOrFail($request->book_id);
            $book->Book_State = 'Emprunté'; // Mettre à jour l'état du livre
            $book->save();

            Emprunt::create([
                'user_id' => $request->user_id,
                'book_id' => $request->book_id,
                'DateEmprunt' => $request->DateEmprunt,
                'DateRetour' => $request->DateRetour
            ]);
        });

        return redirect('/indexlivre2')->with('success', 'Emprunt effectué avec succès!');
    }

// Methode pour retourner livre--------------------------------------------------------------------------------

    // Méthode pour afficher la liste des livres empruntés
    public function liste_empruntes()
    {
        $livresEmpruntes = Livre::where('Book_State', 'Emprunté')->paginate(5);
        return view('livres_empruntes', compact('livresEmpruntes'));
    }

    // Méthode pour retourner un livre emprunté
    public function retournerLivre($id)
    {
        $livre = Livre::findOrFail($id);
        $livre->Book_State = 'Disponible'; // Mettez à jour l'état du livre
        $livre->save();
        
        return redirect('/livres_empruntes')->with('success', 'Le livre a été retourné avec succès.');
    }

    public function searchlivres_empruntes(Request $request)
        {   

            $output = "";
            $livresEmpruntes = Livre::where('Title', 'Like', '%'.$request->searchlivres_empruntes.'%')->orWhere('Author', 'Like', '%'.$request->searchlivres_empruntes.'%')->get();
            $ide = 1;
            foreach($livresEmpruntes as $livre){
                $output .=
                '<tr>
                <td>'.$ide.'</td>
                <td>'.$livre->Title.'</td>
                <td>'.$livre->Author.'</td>
                <td>'.'
                            
                '.'</td>
                </tr>';
            }
            $ide += 1;
            return response($output);
        }
    // Methode pour retourner livre--------------------------------------------------------------------------------

    // Méthode pour afficher la liste des emprunts
public function loanList()
{
    $emprunts = Emprunt::all();
    return view('borrower.loan', compact('emprunts'));
}

// Méthode pour afficher les détails d'un emprunt

// Méthode pour supprimer un emprunt
public function destroyemprunt($id)
{
    $emprunts = Emprunt::findOrFail($id);
    $emprunts->delete();

    return redirect('borrower')->with('success', 'Loan deleted successfully');
}

public function bookshow($id)
{
    $livre = Livre::findOrFail($id);
    return view('bookDetail', compact('livre'));
}





}
