<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD03 Request Modify</title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td {
            border: 1px solid #ddd;
            /* padding: 3px; */
        }

        #watermark {
            position: fixed;
            /* font-size: 20%; */
            /* font-weight: bold;
                color: red; */

            /**
                    Set a position in the page for your image
                    This should center it vertically
                **/
            bottom: 15.5cm;
            left: 3.5cm;

            /** Change image dimensions**/
            width: 8cm;
            height: 8cm;

            /** Your watermark should be behind every content**/
            z-index: -1000;
        }

        #watermark p {
            font-size: 500%;
            font-weight: bold;
            color: #CCD6A6;
            transform: rotate(8deg) translateX(-3%);

        }

        /* #table tr:nth-child(even){background-color: #f2f2f2;} */

        /* #table tr:hover {background-color: #ddd;} */

        /* #table tr {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            } */
    </style>
</head>

<body>
    <div id="watermark">
        <p>
            APPROVED
        </p>
    </div>


    <main>
        <div class="col-lg" style="border:black; border-width:0.5px; border-style:solid;">
            <div style="text-align:center; font-size: 24px;">
                <h4>KD03 Request Modify</h4>
            </div>
            <table id="table">
                <thead>
                    {{-- <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr> --}}
                </thead>
                <tbody>
                    <?php
                    foreach ($data['kd03'] as $row) {
                        echo '<tr>';
                        // echo "<th align=center; colspan=12; >". "NO : " .$row->no_formmis."</th>";
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=2; style="font-size: 14; font-weight:900">' . 'KD03' . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 14; font-weight:900">' . 'KD03 Modify' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left;  style="font-size: 10; font-weight:900; width:25%">' . 'No Customer' . '</td>';
                        echo '<td align=left;  style="font-size: 10; width:25%">' . $row->no_cust . '</td>';
                        echo '<td align=left;  style="font-size: 10; font-weight:900; width:25%">' . 'No Customer' . '</td>';
                        echo '<td align=left;  style="font-size: 10; width:25%">' . $row->no_cust . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Short Name' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->short_name_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Short Name' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->short_name = $row->short_name != '' ? $row->short_name : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Title' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->title_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Title' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->title = $row->title != '' ? $row->title : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Class' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . substr($row->class_old, 4, 20) . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Class' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->class = $row->class != '' ? substr($row->class, 4, 20) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Nama' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->nama1_old . ' ' . $row->nama2_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Nama' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->nama1 = $row->nama1 != '' ? $row->nama1 . ' ' . $row->nama2 : '-' . '</td>');
                        echo '</tr>';
                        // echo "<tr>";
                        // echo '<td align=left; colspan=3; style="font-size: 10;">' . "Nama" . '</td>';
                        // echo '<td align=left; colspan=3; style="font-size: 10;">' . "". '</td>';
                        // echo '<td align=left; colspan=3; style="font-size: 10;">' . "Nama" . '</td>';
                        // echo '<td align=left; colspan=3; style="font-size: 10;">' . "". '</td>';
                        // echo "</tr>";
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Street' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->street_old . ' ' . $row->addit_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Street' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->street = $row->street != '' ? $row->street . ' ' . $row->addit : '-' . '</td>');
                        echo '</tr>';
                        // echo "<tr>";
                        // echo '<td align=left; style="font-size: 10;">' . "Add Street" . '</td>';
                        // echo '<td align=left; style="font-size: 10;">' . "". '</td>';
                        // echo '<td align=left; style="font-size: 10;">' . "Add Street" . '</td>';
                        // echo '<td align=left; style="font-size: 10;">' . "". '</td>';
                        // echo "</tr>";
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Tax' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->tax_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Tax' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->tax = $row->tax != '' ? $row->tax : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Postal Code' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->postal_code_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Postal Code' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->postal_code = $row->postal_code != '' ? $row->postal_code : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Fax' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->fax_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Fax' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->fax = $row->fax != '' ? $row->fax : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'PO Box' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->po_box_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'PO Box' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->po_box = $row->po_box != '' ? $row->po_box : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Phone' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->telp_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Phone' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->telp = $row->telp != '' ? $row->telp : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Mobile' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->mobile_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Mobile' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->mobile = $row->mobile != '' ? $row->mobile : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Home' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->home_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Home' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->home = $row->home != '' ? $row->home : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Country' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->negara_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Country' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->negara = $row->negara != '' ? $row->negara : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Freight' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->kode_county_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Freight' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->kode_county = $row->kode_county != '' ? $row->kode_county : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Kota' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->kota_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'Kota' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->kota = $row->kota != '' ? $row->kota : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'NPWP' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . $row->npwp_old . '</td>';
                        echo '<td align=left; style="font-size: 10; font-weight:900; width:25%">' . 'NPWP' . '</td>';
                        echo '<td align=left; style="font-size: 10; width:25%">' . ($row->npwp = $row->npwp != '' ? $row->npwp : '-' . '</td>');
                        echo '</tr>';
                        echo '<br>';
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php
                    foreach ($data['kd03'] as $row) {
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . 'Created By' . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . 'Approve By' . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . 'Approve By' . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . 'Approve By' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . $row->created_by . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . $row->aprv1_by . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . $row->aprv2_by . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . $row->inputted_by . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . date('d-m-Y', strtotime($row->created_date)) . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . date('d-m-Y', strtotime($row->aprv1_date)) . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . date('d-m-Y', strtotime($row->aprv2_date)) . '</td>';
                        echo '<td align=center; style="font-size: 8; width:25%">' . date('d-m-Y', strtotime($row->inputed_date)) . '</td>';
                        echo '</tr>';
                    }
                    
                    ?>
                </tfoot>
            </table>
        </div>
    </main>

    {{-- <small>FX-KXSA-001 | A.00-1</small> --}}
</body>

</html>
