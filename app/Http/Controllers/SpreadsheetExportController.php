<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SpreadsheetExportController extends Controller



{
    
    public function exportHotelInquiry()
    {
        $show = DB::table('hotel_inquiries as hi')
            ->join('hotels as h', 'hi.hotelId', '=', 'h.id')
            ->select('h.name as hname', 'hi.name', 'hi.email', 'hi.id', 'hi.phone', 'hi.travFrom', 'hi.starDate', 'hi.endDate', 'hi.descripyion', 'hi.created_at')
            ->orderBy('hi.created_at', 'desc')
            ->get();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set column names based on your provided structure
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Travel From');
        $sheet->setCellValue('E1', 'Start Date');
        $sheet->setCellValue('F1', 'End Date');
        $sheet->setCellValue('G1', 'Description');

    
        // Loop through the data and add it to the sheet
        $row = 2;
        foreach ($show as $item) {
            $sheet->setCellValue('A' . $row, $item->name);
            $sheet->setCellValue('B' . $row, $item->email);
            $sheet->setCellValue('C' . $row, $item->phone);
            $sheet->setCellValue('D' . $row, $item->travFrom);
            $sheet->setCellValue('E' . $row, $item->starDate);
            $sheet->setCellValue('F' . $row, $item->endDate);
            $sheet->setCellValue('G' . $row, $item->descripyion);

            $row++;
        }
    
        // Create a response
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="export.xlsx"',
            ]
        );
    
        return $response;
    }
    

    public function exportUmrahInquiry()
    {
        $showUmrah = DB::table('umrah_inquiries as ui')
            ->join('umrah_pakages as up','ui.umrahId','=','up.id')
            ->select('up.days','ui.name','ui.email','ui.id','ui.phone','ui.noOfPerson','ui.date','ui.created_at')
            ->orderBy('created_at', 'desc')
            ->get();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Date');
        $sheet->setCellValue('E1', 'No of Person');
        $sheet->setCellValue('F1', 'Pakage Name');

        $row = 2;
        foreach ($showUmrah as $item) {
            $sheet->setCellValue('A' . $row, $item->name);
            $sheet->setCellValue('B' . $row, $item->email);
            $sheet->setCellValue('C' . $row, $item->phone);
            $sheet->setCellValue('D' . $row, $item->date);
            $sheet->setCellValue('E' . $row, $item->noOfPerson);
            $sheet->setCellValue('F' . $row, $item->days);

            $row++;
        }
    
        // Create a response
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="export.xlsx"',
            ]
        );
    
        return $response;
    }

    public function exportHolidayInquiry()
    {
        $show = DB::table('holiday_inquiries as hi')
                ->join('holidays as h','hi.holidayId','=','h.id')
                ->select('h.name as hname','hi.pTravFrom','hi.pStarDate','hi.id','hi.pEndDate','hi.adults','children','hi.infants','hi.description','hi.passName','hi.pEmail','hi.Contnumber','hi.created_at')
                ->orderBy('created_at', 'desc')
                ->get();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set column names based on your provided structure
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Travel From');
        $sheet->setCellValue('E1', 'Start Date');
        $sheet->setCellValue('F1', 'End Date');
        $sheet->setCellValue('G1', 'Adults');
        $sheet->setCellValue('H1', 'Children');
        $sheet->setCellValue('I1', 'Infants');
        $sheet->setCellValue('J1', 'Description');
        $sheet->setCellValue('K1', 'Holiday Name');

    
        // Loop through the data and add it to the sheet
        $row = 2;
        foreach ($show as $item) {
            $sheet->setCellValue('A' . $row, $item->passName);
            $sheet->setCellValue('B' . $row, $item->pEmail);
            $sheet->setCellValue('C' . $row, $item->Contnumber);
            $sheet->setCellValue('D' . $row, $item->pTravFrom);
            $sheet->setCellValue('E' . $row, $item->pStarDate);
            $sheet->setCellValue('F' . $row, $item->pEndDate);
            $sheet->setCellValue('G' . $row, $item->adults);
            $sheet->setCellValue('H' . $row, $item->children);
            $sheet->setCellValue('I' . $row, $item->infants);
            $sheet->setCellValue('J' . $row, $item->description);
            $sheet->setCellValue('K' . $row, $item->hname);

            $row++;
        }
    
        // Create a response
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="export.xlsx"',
            ]
        );
    
        return $response;
    }

    public function exportFlightInquiry()
    {
        $show = DB::table('flight_inquiry as fi')
                ->join('flights as f','fi.flightId','=','f.id')
                ->select('f.flying_from','f.flying_to','fi.fname','fi.lname','fi.email','fi.id','fi.phone','fi.destination','fi.form','fi.dateOfDeparture','fi.dateOfArival','fi.airline','fi.noOfPassenger','fi.class','fi.message','fi.created_at')
                ->orderBy('created_at', 'desc')
                ->get();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set column names based on your provided structure
        $sheet->setCellValue('A1', 'First Name');
        $sheet->setCellValue('B1', 'Last Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Phone');
        $sheet->setCellValue('E1', 'Destination');
        $sheet->setCellValue('F1', 'Form');
        $sheet->setCellValue('G1', 'Date of Departure');
        $sheet->setCellValue('H1', 'Date of Arival');
        $sheet->setCellValue('I1', 'Airline');
        $sheet->setCellValue('J1', 'No of Person');
        $sheet->setCellValue('K1', 'Class');
        $sheet->setCellValue('L1', 'Message');
        $sheet->setCellValue('M1', 'Flight from');
        $sheet->setCellValue('N1', 'Flight to');

    
        // Loop through the data and add it to the sheet
        $row = 2;
        foreach ($show as $item) {
            $sheet->setCellValue('A' . $row, $item->fname);
            $sheet->setCellValue('B' . $row, $item->lname);
            $sheet->setCellValue('C' . $row, $item->email);
            $sheet->setCellValue('D' . $row, $item->phone);
            $sheet->setCellValue('E' . $row, $item->destination);
            $sheet->setCellValue('F' . $row, $item->form);
            $sheet->setCellValue('G' . $row, $item->dateOfDeparture);
            $sheet->setCellValue('H' . $row, $item-> dateOfArival);
            $sheet->setCellValue('I' . $row, $item->airline);
            $sheet->setCellValue('J' . $row, $item->noOfPassenger);
            $sheet->setCellValue('K' . $row, $item->class);
            $sheet->setCellValue('L' . $row, $item->message);
            $sheet->setCellValue('M' . $row, $item->flying_from );
            $sheet->setCellValue('N' . $row, $item->flying_to );


            

            $row++;
        }
    
        // Create a response
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="export.xlsx"',
            ]
        );
    
        return $response;
    }

    public function exportInsuranceInquiry()
    {
        $show = DB::table('insurance_inquiries as in')
        ->join('insurances as i',  'in.insurance_Id' , '=', 'i.id')
        ->select('i.travel_plan_for','in.costomer_name', 'in.CNIC', 'in.data_of_birth','in.father_name','in.Mobile_number','in.Email', 'in.Gender','in.purppose_of_vist' , 'in.adress' ,'in.passport' ,'in.Depature_date' , 'in.select_country_travel' ,'in.airline' ,'in.number_of_passengers' ,'in.class' ,'in.price' , 'in.beneficiary_name' ,'in.beneficiary_relation', 'in.beneficiary_CNIC' , 'in.beneficiary_phone' , 'in.beneficiary_adress' , 'in.Insurance_Id', 'in.created_at')
        ->orderBy('created_at', 'desc')
        ->get();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set column names based on your provided structure
        $sheet->setCellValue('A1', 'Costomer Name');
        $sheet->setCellValue('B1', 'CNIC');
        $sheet->setCellValue('C1', 'Date of birth');
        $sheet->setCellValue('D1', 'Father Name');
        $sheet->setCellValue('E1', 'Moblie phone');
        $sheet->setCellValue('F1', 'Email');
        $sheet->setCellValue('G1', 'Gender');
        $sheet->setCellValue('H1', 'purpose of visit');
        $sheet->setCellValue('I1', 'Adress');
        $sheet->setCellValue('J1', 'passport');
        $sheet->setCellValue('K1', 'Depature of date');
        $sheet->setCellValue('L1', 'Select country of travel');
        $sheet->setCellValue('M1', 'Airline');
        $sheet->setCellValue('N1', 'class');
        $sheet->setCellValue('O1', 'price');
        $sheet->setCellValue('p1', 'Beneficiary Name');

        $sheet->setCellValue('Q1', 'Beneficiary Relation');
        $sheet->setCellValue('R1', 'Beneficiary CNIC');
        $sheet->setCellValue('S1', 'Beneficiary Phone ');
        $sheet->setCellValue('T1', 'beneficiary Adress');
        $sheet->setCellValue('U1', 'Insurance PLAN');

      

        

        

        

        


    
        // Loop through the data and add it to the sheet
        $row = 2;
        foreach ($show as $item) {
            $sheet->setCellValue('A' . $row, $item->costomer_name);
            $sheet->setCellValue('B' . $row, $item->CNIC);
            $sheet->setCellValue('C' . $row, $item->data_of_birth);
            $sheet->setCellValue('D' . $row, $item->father_name);
            $sheet->setCellValue('E' . $row, $item->Mobile_number);
            $sheet->setCellValue('F' . $row, $item->Email);
            $sheet->setCellValue('G' . $row, $item->Gender);
            $sheet->setCellValue('H' . $row, $item->purppose_of_vist);
            $sheet->setCellValue('I' . $row, $item-> passport);
            $sheet->setCellValue('J' . $row, $item->price);
            $sheet->setCellValue('K' . $row, $item->Depature_date);
            $sheet->setCellValue('L' . $row, $item->select_country_travel);
            $sheet->setCellValue('M' . $row, $item->airline);
            $sheet->setCellValue('N' . $row, $item->number_of_passengers);
            $sheet->setCellValue('O' . $row, $item->class);
            $sheet->setCellValue('P' . $row, $item->beneficiary_name);
            $sheet->setCellValue('Q' . $row, $item->beneficiary_relation);
           $sheet->setCellValue('R' . $row, $item->beneficiary_CNIC);
         $sheet->setCellValue('S' . $row, $item->beneficiary_phone); $sheet->setCellValue('T' . $row, $item->beneficiary_adress);
         $sheet->setCellValue('U' . $row, $item->travel_plan_for);
            

            $row++;
        }
    
        // Create a response
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="export.xlsx"',
            ]
        );
    
        return $response;
    }

}