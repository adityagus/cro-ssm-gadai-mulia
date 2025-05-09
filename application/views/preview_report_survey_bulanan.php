<html>
<head>
    <title>Preview Report Survey Bulanan</title>
</head>
<body>
<h1 style="text-align: center;">Laporan Survey Bulanan</h1>
<center>
<!-- <?php
    $print_antrian = base_url('C_cro/cetak_report_survey?date_start='.@$date_start.'&date_end='.@$date_end);
?> -->
    <!-- <a href="<?= @$print_survey_bulanan ?>" target="_blank">Cetak Data</a><br><br> -->
</center>

<div style="padding-left: 5%; padding-right: 5%;">
    <div>
        <?php
        foreach($DataCompanyAreaCabang as $row_company){
            $KodeKantor = $row_company->kode_kantor;
            $JmlCabang = $row_company->jml_cabang;
            if($KodeKantor == @$GetKodeKantor){
                echo "Area : ";
                print_r($KodeKantor);
                // print_r($JmlCabang);
                echo "<br>";
                $DataCabang = $this->db->query("SELECT a.kota AS cabang, a.nama, a.kode_kantor FROM mst_company AS a WHERE a.kode_kantor='".$KodeKantor."' ")->result();
                  // echo $this->db->last_query();die();
                // print_r($DataCabang); 
                foreach($DataCabang as $row_cabang){
                    $CabangCompany = $row_cabang->cabang;
                    $DataReportBulanan = $this->db->query("SELECT COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.kota = '".$CabangCompany."' GROUP BY d.id_quest")->result();
                    // $DataTotal = $this->db->query("SELECT , a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.kota = '".$CabangCompany."' GROUP BY d.id_quest")->result();
                    // print_r($DataReportBulanan);
                    // die();
                if($DataReportBulanan == array() || $DataReportBulanan == NULL || $DataReportBulanan == ''){
                    echo "Tidak Ada Data Untuk Cabang ";
                    print_r($row_cabang->cabang);
                    echo "<br>";
                }else{
                    echo "<br>";
                    echo "Nama Cabang : ";
                    print_r($row_cabang->nama);
                    echo "<br>";
                    $itemNamaCabang[] = $row_cabang->nama;
                    // echo "Cabang : ";
                    // print_r($row_cabang->cabang);
                    // echo "<br>";
                ?>

          <table border="1" style="width: 100%;">
            <tr style="text-align: center;">
                <!-- <td>Nama Customer</td> -->
                <td>Area</td>
                <td>Kota</td>
                <td>Survey</td>
                <td>No</td>
                <td>Hasil Survey Pembeli & Service</td>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>Total</td>
                <td>Total A</td>
                <td>Total B</td>
                <td>Total C</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>Total Result</td>
                <td>Result</td>
            </tr>
            <?php
            $no=0;
            $startTotal=0;
            // $noSales = @$SalesJmlData;
            // $noService = @$SarviceJmlData;
            foreach($DataReportBulanan as $row){
            $no++;
            $Total_A = $row->Kosong + $row->Pertama + $row->Dua + $row->Tiga + $row->Empat + $row->Lima + $row->Enam;
            $Total_B = $row->Tujuh + $row->Delapan;
            $Total_C = $row->Sembilan + $row->Sepuluh;
            $A = $Total_A / $row->Total * 100;
            $B = $Total_B / $row->Total * 100;
            $C = $Total_C / $row->Total * 100;
            $Result = $C - $A;
            $Total_ar = array($row->Total);
            $TotalPartipisan = $row->Total;
            $TotalPartipisan++;
            $getTotal = $TotalPartipisan;
            $ReportBulanan[] = $row;
            $data_total[] = $row->Total;
            ?>
            <tr style="text-align: center;">
              <!-- <td><?php echo $row->nama_cust ?></td> -->
              <td><?php echo $row->kode_kantor ?></td>
              <td><?php echo $row->kota ?></td>
              <td><?php echo $row->type ?></td>
              <td><?php echo $row->no_type ?></td>
              <td><?php echo $row->quest ?></td>
              <td><?php echo $row->Kosong ?></td>
              <td><?php echo $row->Pertama ?></td>
              <td><?php echo $row->Dua ?></td>
              <td><?php echo $row->Tiga ?></td>
              <td><?php echo $row->Empat ?></td>
              <td><?php echo $row->Lima ?></td>
              <td><?php echo $row->Enam ?></td>
              <td><?php echo $row->Tujuh ?></td>
              <td><?php echo $row->Delapan ?></td>
              <td><?php echo $row->Sembilan ?></td>
              <td><?php echo $row->Sepuluh ?></td>
              <td><?php echo $row->Total ?></td>
              <td><?php echo $Total_A ?></td>
              <td><?php echo $Total_B ?></td>
              <td><?php echo $Total_C ?></td>
              <td><?php echo round($A)."%" ?></td>
              <td><?php echo round($B)."%" ?></td>
              <td><?php echo round($C)."%" ?></td>
              <td><?php echo $getTotal ?></td>
              <td><?php echo round($Result)."%" ?></td>
            </tr>
            <?php }?> 
            <!-- <tr style="text-align: center;">
                <td colspan="6">
                    Total Terlayani
                </td>
                <td>
                    <?= @$JumlahTerlayani ?>
                </td>
            </tr>
             <tr style="text-align: center;">
                <td colspan="6">
                    Total Lost
                </td>
                <td>
                    <?= @$JumlahLost ?>
                </td>
            </tr> -->
        </table>
        
                <?php
            }
                }
            }
        }
        ?>

        <!-- START BAGIAN TOTAL ALL SALES -->
        <br>
        <?php
        // foreach ($Total_ar as $row_total_ar) {
          // echo $Total_ar;
          // print_r($ReportBulanan);
          // foreach ($ReportBulanan as $row_data) {
          //   print_r($row_data->Total);
          //   $data_total[] = $row_data->Total;
          // }
          // print_r($itemNamaCabang);
          // echo "<br>";
          // print_r($data_total);
          // print_r(array_sum($data_total));//untuk menjumlahkan semua data number array
          // echo "<br>";
          // // echo implode(" ", $data_total);
          // echo "<br>";
          // echo "<br>";
          // print_r($DataCompanyAreaCabang);
          // die;
          foreach($DataCompanyAreaCabang as $row_company2){
            $KodeKantor2 = $row_company2->kode_kantor;
            $JmlCabang2 = $row_company2->jml_cabang;
            if($KodeKantor2 == @$GetKodeKantor){
              // print_r($KodeKantor2);
              foreach($DataCabang as $row_cabang2){
                $CabangCompany2 = $row_cabang2->cabang;
                    $DataReportBulanan2 = $this->db->query("SELECT COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor2."' AND c.kota = '".$CabangCompany2."' AND e.type='SALES' GROUP BY d.id_quest")->result();
                    $jmlDataReport=0;
                if($DataReportBulanan2 == array() || $DataReportBulanan2 == NULL || $DataReportBulanan2 == ''){
                    // echo "Tidak Ada Data Untuk Cabang ";
                    // print_r($row_company2);
                    $jmlDataReport++;
                    // print_r('Kosong');
                    print_r($jmlDataReport);
                    $jmlReportData[] = $jmlDataReport;
                    // echo "<br>";
                }else{
                ?>
           <table border="1" style="width: 100%;">
              <tr style="text-align: center;">
                <td>No</td>
                <td>Survey</td>
                <td>Total</td>
              </tr>
              <?php
              $no2=0;
              foreach($DataReportBulanan2 as $row2){
              $no2++;
              $ArrayTotalSales[] = $row2->Total;
              ?>
              <tr style="text-align: center;">
                <td><?php echo $no2 ?></td>
                <td><?php echo $row2->type ?></td>
                <td><?php echo $row2->Total ?></td>
              </tr>
              <?php
              }
            ?>
            </table>
                <?php
                }
              }
            }
          }
        // echo "<br>";
        ?>
        <?php
        array_unshift($ArrayTotalSales,"");
        unset($ArrayTotalSales[0]);
        // print_r($ArrayTotalSales);
        // echo " ||| ";
        // echo "<br>";
        // echo count($ArrayTotalSales);
        // echo " || ";
        // print_r($jmlReportData);
        // echo " || ";
        // print_r(array_sum($jmlReportData));
        // echo " || ";
        // echo $no2;
        // echo "<br>||";
        echo "<br>";
        $six=6;
        $SumReportData = array_sum($jmlReportData);
        if($SumReportData < $no2){
          $maxData=$no2-$SumReportData;
          echo "versi maxdata 1 Sales";
          echo "<br>";
        }else{
          print_r($SumReportData);
          echo " || ";
          print_r($no2);
          echo " || ";
          $NilaiKurang=$SumReportData-6;
          $maxData=$NilaiKurang-$no2;
          // $maxData=$no2;
          // $maxData=$max-3;
          print_r($maxData);
          echo " || versi maxdata 2 Sales";
          echo "<br>";
        }
        echo "Jumlah Data : ";
        print_r($no2);
        echo " || sumreport sales : ";
        print_r($SumReportData);
        echo " || maxdata sales : ";
        print_r($maxData);
        echo " || Fix MaxData : ";
        $Rplc_maxData = str_replace("-", "", $maxData);
        $Fix_maxData = $Rplc_maxData;
        print_r($Fix_maxData);
        echo " || ";
        for($i=1; $i<=$Fix_maxData; $i++){
          $x = $i*4;
          $six2 = $six*2;
          if($x == $six){
            continue;
          }elseif($x == $six2){
            $x;
          }else{
            $x;
          }
          $itemFor[] = $x;
          // echo $x;
          // echo "<br>";
        }
        // print_r($itemFor);
        print_r($ArrayTotalSales);
        // echo "<br>";
        ?>
        <table border="1" style="width: 100%;">
        <?php
        $SalesNo=0;
        foreach ($itemFor as $itemFor_one) {
        $SalesNo++;
          print_r($itemFor_one);
          // print_r($ArrayTotalSales[$itemFor_one]);
        ?>
            <tr style="text-align: center;">
                <td>Total Sales <?php echo $SalesNo ?></td>
                <td><?php echo $ArrayTotalSales[$itemFor_one] ?></td>
            </tr>
        <?php
          $hasilDataTotalSales[] =  $ArrayTotalSales[$itemFor_one];
        }
        // echo "<br>";
        $FixSumDataTotalSales = array_sum($hasilDataTotalSales);
        // print_r($FixSumDataTotalSales);
        ?>
            <!-- <tr style="text-align: center;">
                <td>Total All</td>
                <td><?php echo $FixSumDataTotalSales ?></td>
            </tr> -->
        <!-- </table> -->
        <!-- END BAGIAN TOTAL ALL SALES -->
        <!-- START BAGIAN TOTAL ALL SERVICE -->
        <?php
        foreach($DataCompanyAreaCabang as $row_company3){
            $KodeKantor3 = $row_company3->kode_kantor;
            $JmlCabang3 = $row_company3->jml_cabang;
            if($KodeKantor3 == @$GetKodeKantor){
              // print_r($KodeKantor2);
              foreach($DataCabang as $row_cabang3){
                $CabangCompany3 = $row_cabang3->cabang;
                    $DataReportBulanan3 = $this->db->query("SELECT COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor3."' AND c.kota = '".$CabangCompany3."' AND e.type='SERVICE' GROUP BY d.id_quest")->result();
                    echo "<br>";
                    // echo $this->db->last_query();
                    $jmlDataReport2=0;
                    // print_r($DataReportBulanan3);
                    // die();
                if($DataReportBulanan3 == array() || $DataReportBulanan3 == NULL || $DataReportBulanan3 == ''){
                    // echo "Tidak Ada Data Untuk Cabang ";
                    // print_r($row_company2);
                    echo "<br>";
                    $jmlDataReport2++;
                    print_r('Kosong');
                    $jmlReportData2[] = $jmlDataReport2;
                    print_r($jmlDataReport2);
                    echo "<br>";
                }else{
                ?>
            <!-- <table border="1" style="width: 100%;">
              <tr style="text-align: center;">
                <td>Survey</td>
                <td>Total</td>
              </tr> -->
              <?php
              $no3=0;
              foreach($DataReportBulanan3 as $row3){
              $no3++;
              $ArrayTotalService[] = $row3->Total;
              ?>
              <!-- <tr style="text-align: center;">
                <td><?php echo $row3->type ?></td>
                <td><?php echo $row3->Total ?></td>
              </tr> -->
              <?php
              }
            ?>
            <!-- </table> -->
                <?php
                }
              }
            }
          }
        // echo "<br>";
        ?>
        <?php
        echo "<br>";
        // echo "<br>";
        array_unshift($ArrayTotalService,"");
        unset($ArrayTotalService[0]);
        print_r($ArrayTotalService);
        echo " ||| ";
        // echo "<br>";
        // echo count($ArrayTotalService);
        // echo " || ";
        // print_r($jmlReportData2);
        // echo " || ";
        // print_r(array_sum($jmlReportData2));
        // echo " || ";
        // echo $no3;
        // echo "<br>||";
        // echo "<br>";
        // print_r($jmlReportData2);
        $six=6;
        $SumReportData2 = array_sum($jmlReportData2);
        if($SumReportData2 < $no3){
          $maxData2=$no3-$SumReportData2;
          print_r($maxData2);
          echo " || versi maxdata 1 Service";
          echo "<br>";
        }else{
          print_r($SumReportData2);
          echo " || ";
          print_r($no3);
          echo " || ";
          $maxData2=$SumReportData2-$no3;
          $maxData2=$maxData2-2;
          // $maxData=$max-3;
          print_r($maxData2);
          echo " || versi maxdata 2 Service";
          echo "<br>";
        }
        print_r($no3);
        echo " || sumreport Service : ";
        print_r($SumReportData2);
        echo " || maxdata service : ";
        print_r($maxData2);
        echo " || ";
        //start old
        // $Rplc_maxData2 = str_replace("-", "", $maxData2);
        // $Fix_maxData2 = $Rplc_maxData2;
        // $six2=6;
        // // $SumReportData2 = array_sum($jmlReportData2);
        // // $maxData2=$no3-$SumReportData2;
        // for($i=1; $i<=$maxData2; $i++){
        //   $x = $i*4;
        //   $six2 = $six*2;
        //   if($x == $six){
        //     continue;
        //   }elseif($x == $six2){
        //     $x;
        //   }else{
        //     $x;
        //   }
        //   $itemFor2[] = $x;
        //   // echo $x;
        //   // echo "<br>";
        // }
        //end old
        $Rplc_maxData2 = str_replace("-", "", $maxData2);
        $Fix_maxData2 = $Rplc_maxData2;
        echo "<br>";
        echo "Fix MaxData2 : ";
        print_r($Fix_maxData2);
        echo "<br>";
        for($i=1; $i<=$Fix_maxData2; $i++){
          $x = $i*4;
          $six2 = $six*2;
          if($x == $six){
            continue;
          }elseif($x == $six2){
            $x;
          }else{
            $x;
          }
          $itemFor2[] = $x;
          echo "<br>";
          echo $x;
        }
        echo "<br>";
        // print_r($itemFor);
        print_r($ArrayTotalService);
        echo "<br>";
        ?>
        <!-- <table border="1" style="width: 100%;"> -->
        <?php
        $ServiceNo=0;
        foreach ($itemFor2 as $itemFor_two) {
        $ServiceNo++;
          // print_r($itemFor_one);
          print_r($itemFor_two);
          // print_r($ArrayTotalSales[$itemFor_one]);
        ?>
            <tr style="text-align: center;">
                <td>Total Service <?php echo $ServiceNo ?></td>
                <td><?php echo $ArrayTotalService[$itemFor_two] ?></td>
            </tr>
        <?php
          $hasilDataTotalService[] =  $ArrayTotalService[$itemFor_two];
        }
        // echo "<br>";
        //FixSumDataTotalSales
        $FixSumDataTotalService = array_sum($hasilDataTotalService);
        // print_r($FixSumDataTotalSales);
        @$FixSumDataTotalSalesService = $FixSumDataTotalSales + $FixSumDataTotalService;
        ?>
            <tr style="text-align: center;">
                <td>Total All</td>
                <td><?php echo @$FixSumDataTotalSalesService ?></td>
            </tr>
        </table>
        <!-- END BAGIAN TOTAL ALL SERVICE-->



    </div>
</div>

</body>
</html>