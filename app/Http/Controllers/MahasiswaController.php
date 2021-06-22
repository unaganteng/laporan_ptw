<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Student;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = Student::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request;
        $mahasiswa = new Student;
        $mahasiswa->id = $request->nbi;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tmp_tgl = $request->tmp;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('status','Data Mahasiswa Berhasil Ditambahkan !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
     
        //$mahasiswa = DB::table('mahasiswa')->where('nbi',$id)->first();
        return view('mahasiswa.show', ['mahasiswa' => $student]);
        //return $student;
    }

    public function cetak(Request $request, Student $student)
    {
        $student = Student::where('id',$request->nbi)->first();    
        $data= view('mahasiswa.cetak', ['mahasiswa' => $student]);


       return $data;
 
       
       
 
       
 
    }
 
// ini utk pdf belum jalan
//===========================
    public function print_PDF()
    {
        $data = [
            'title' => 'First PDF for Medium',
            'heading' => 'Hello from 99Points.info',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'        
              ];
          
          $pdf = PDF::loadView('mahasiswa.cetak', $data);  
          return $pdf->download('medium.pdf');

    }

    public function printPDF(Student $student)
    {
        
        return view('mahasiswa.cetak', ['mahasiswa' => $student]);
        //$pdf = PDF::loadView('mahasiswa.cetak', ['mahasiswa' => $student]);  
        //return $pdf->download('medium.pdf');       
    }
//==============================
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('mahasiswa.edit', ['mahasiswa' => $student]);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        Student::where('id',$student->id)
            ->update([
                'id'=> $request->nbi,
                'nama'=> $request->nama,
                'tmp_tgl'=> $request->tmp
            ]);
                return redirect('/mahasiswa')->with('status','Data Mahasiswa Berhasil Di Update !!');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/mahasiswa')->with('status','Data Mahasiswa Berhasil Dihapus !!');
    }
}
