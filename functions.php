<?php
            /*
                Sinan KARAYAMAN
            */

                if(isset($_POST['Yas']) && isset($_POST['Kilo']) && isset($_POST['Boy'])){


                    $Yas=$_POST['Yas'];
                    $Kilo=$_POST['Kilo'];
                    $Boy = $_POST['Boy'];
                    $cinsiyet=$_POST['cinsiyet'];

                    switch ($cinsiyet){

                        case 'Female':
                            $cinsiyet= 655 + (9.6 * $Kilo ) + (1.8 * $Boy) - (4.7 * $Yas);
                            echo "<p>Tahmini günlük metabolizma hızınız $cinsiyet </p>";
                            echo "<p>Bu şu anki kilonuzu korumak için günde kabaca $cinsiyet kaloriye ihtiyacınız olduğu anlamına gelir.</p>";
                            break;

                        case 'Male':
                            $cinsiyet=66 + (13.7 *$Kilo) + (5 * $Boy) - (6.8 * $Yas);
                            echo "<p>Tahmini günlük metabolizma hızınız : $cinsiyet </p>";
                            echo "<p>Bu şu anki kilonuzu korumak için günde kabaca $cinsiyet kaloriye ihtiyacınız olduğu anlamına gelir.</p>";
                            break;


                    }


                }
            ?>