<?php
  
namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $etudiants = Etudiant::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'etudiants' => $etudiants
        ]; 
            
        $pdf = PDF::loadView('imprimeretudiants', $data);
     
        return $pdf->download('liste etudiants.pdf');
    }
    public function generatePDF1()
    {
        $users = User::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('imprimerusers', $data);
     
        return $pdf->download('liste users.pdf');
    }
    
}

