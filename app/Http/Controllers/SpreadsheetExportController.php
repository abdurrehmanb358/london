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
        $sheet->setCellValue('A1', 'Last Name');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Destination');
        $sheet->setCellValue('D1', 'Form');
        $sheet->setCellValue('E1', 'Date of Departure');
        $sheet->setCellValue('F1', 'Date of Arival');
        $sheet->setCellValue('F1', 'Airline');
        $sheet->setCellValue('F1', 'No of Person');
        $sheet->setCellValue('G1', 'Class');
        $sheet->setCellValue('G1', 'Message');
        $sheet->setCellValue('G1', 'Flight Name');

    
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

    

}
