<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\FAQ;
use App\Models\Pages;
use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Department;
use App\Models\Employees;
use App\Models\Events;

class IndexController extends Controller
{
    //
    public function contactUs()
    {
        return view('site.contactUs');
    }


    public function aboutUs()
    {
        return view('site.aboutUs');
    }

    public function media()
    {
        return view('site.media');
    }
    public function footerPages()
    {
        return view('site.footerPages');
    }
    public function ourTeam()
    {
        return view('site.ourTeam');
    }

    public function allfaq()
    {
        return view('site.allfaq');
    }

    /*===Help Center==============================*/
    
    public function help()
    {
        $allCaegories = Categories::where('parent_id',0)->get();
        foreach($allCaegories as $data)
        {
            $child = Categories::where('parent_id',$data->id)->get();
            foreach ($child as $s) {
                $sub1 = Categories::where('parent_id', $s->id)->get();
                foreach ($sub1 as $ss) {
                    $pageData = Pages::where('category_id',$ss->id)->first();
                    if(empty($pageData->description_ar))
                    {$ss->pageData = '';}else{
                       // var_dump( $pageData->description_ar);
                        $ss->pageData = $pageData->description_ar;
                    }
                   
                   
                }
                $s->subSub = $sub1;
              
            }
            $data->child = $child;
        }
        
        return view('site.help')->with(['allCat' => $allCaegories]);
    }

    public function helpDetails($id)
    {
        $allCaegories = Categories::where('parent_id',0)->get();
        foreach($allCaegories as $data)
        {
            $child = Categories::where('parent_id',$data->id)->get();
            foreach ($child as $s) {
                $sub1 = Categories::where('parent_id', $s->id)->get();
                $s->subSub = $sub1;
            }
            $data->child = $child;
        }
        $pageData = Pages::where('category_id',$id)->get();
        return view('site.helpDetails')->with(['allCat' => $allCaegories , 'pageData' => $pageData]);
    }


    public function question()
    {
        $allData = FAQ::all();
        $allCaegories = Categories::where('parent_id',0)->get();
        foreach($allCaegories as $data)
        {
            $child = Categories::where('parent_id',$data->id)->get();
            foreach ($child as $s) {
                $sub1 = Categories::where('parent_id', $s->id)->get();
                $s->subSub = $sub1;
            }
            $data->child = $child;
        }
        return view('site.question')->with(['allData' => $allData , 'allCat' => $allCaegories]);
    }


    public function search(Request $request)
    {
        

        $allData = Pages::where('name_ar', 'LIKE', '%' . $request->search . '%')->get();
       // var_dump($allData);

        $allCaegories = Categories::where('parent_id',0)->get();
        foreach($allCaegories as $data)
        {
            $child = Categories::where('parent_id',$data->id)->get();
            foreach ($child as $s) {
                $sub1 = Categories::where('parent_id', $s->id)->get();
                $s->subSub = $sub1;
            }
            $data->child = $child;
        }
        return view('site.search')->with(['allCat' => $allCaegories , 'allData' => $allData]);
    }


    /*====Tower=============================*/
    public function cards()
    {
        return view('site.cards');
    }
    public function towers()
    {
        return view('site.towers');
    }

    public function companies()
    {
        $allData = Companies::all();
        return view('site.companies')->with([ 'allData' => $allData ]);
    }

    public function department($id)
    {
        $cData = Companies::where('id', $id)->first();
        $allData = Department::where('company_id',$id)->get();
        foreach($allData as $data)
        {
            $allE = Employees::where('department_id',$data->id)->get();
            $data->empCount = count($allE);

        }
        $allEmp = Employees::where('company_id',$id)->get();
        return view('site.department')->with([ 'allData' => $allData , 'allEmp' => $allEmp ,
        'cData' => $cData]);
    }


    public function employees($id)
    {
        $DData = Department::where('id', $id)->first();
        $cData = Companies::where('id', $DData->company_id)->first();
        $allData = Employees::where('department_id',$id)->get();
        $allDept = Department::where('company_id', $DData->company_id)->get();
        foreach($allDept as $data)
        {
            $allE = Employees::where('department_id',$data->id)->get();
            $data->empCount = count($allE);

        }
        return view('site.employees')->with([ 'allData' => $allData , 
        'cData' => $cData , 'DData' => $DData , 'allDept' => $allDept]);
    }

    public function events()
    {
        $allData = Events::all();
        return view('site.events')->with([ 'allData' => $allData ]);
    }

    public function employeesEvent($id)
    {
       // $DData = Department::where('id', $id)->first();
        $cData = Events::where('id', $id)->first();
        $allData = Employees::where('event_id',$id)->get();
        return view('site.employeesEvent')->with([ 'allData' => $allData , 
        'cData' => $cData ]);
    }

    

}
