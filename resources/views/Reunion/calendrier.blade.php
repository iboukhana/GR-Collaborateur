@extends('base')
@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
        <?php
        $input=2018;
        $date=$input.'-01-01';
        $n=$input+1;
        $begin = new DateTime($date);
        $end = new DateTime($n.'-01-01');
        $z= date("z", mktime(0,0,0,12,31,$input)) +1;
        $j=1;
        $final_date=null;
        $date_planifiee=null;
        $date_replanification
        =null;
        $date_prevue=null;
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
       

        function colspan($date){
        
                echo "<tr>";
            $m = array(1=>'Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
          $date_utilisation=$date;
          $end = date("t", strtotime($date));
          //pour le colspan des mois
           for ($i=1; $i<=12 ; $i++) 
                { 
                  $c=0;
                      $date_utilisation=$date;
                      for ($j=1; $j<=$end ; $j++)
                       { 
                        $day_num = date('d', strtotime($date_utilisation));
                        $day_name = date('l', strtotime($date_utilisation));
                        
                           
                        if ($day_name!='Sunday'&& $day_name!='Saturday') {$c++;}
                        
                             $date_utilisation = date("Y-m-d", strtotime("+1 day", strtotime($date_utilisation)));
                          }
        
                  echo '<th class="text-center" colspan='.$c.' >'.$m[$i].'</th>';        
                  $date =  date("Y-m-d", strtotime("+1 month", strtotime($date)));
                  $end = date("t", strtotime($date));
              
              }
                 echo "</tr>";
          }
         
         
           
        
        
        function affiche_mois_anne($date){ 
         $date_utilisation=$date;
          $end = date("t", strtotime($date));
          colspan($date);
        echo'<tr>';
                for ($i=1; $i<=12 ; $i++) 
                { 
                      $date_utilisation=$date;
                      for ($j=1; $j<=$end ; $j++)
                       { 
                           
                        $day_num = date('d', strtotime($date_utilisation));
                        $day_name = date('l', strtotime($date_utilisation));
                        
                            switch ($day_name){
                            case 'Monday':
                               $day_name='Lun';
                                break;
                                case 'Tuesday':
                                $day_name='Mar';
                                break; 
                                case 'Wednesday':
                               $day_name='Mer';
                                break; 
                                case 'Thursday':
                               $day_name='Jeu';
                                break;
                                 case 'Friday':
                               $day_name='Ven';
                                break;
                                case 'Saturday':
                               $day_name='Samedi';
                                break;
                                case 'Sunday':
                               $day_name='Dimanche';
                                break;}
                                if ($day_name!='Dimanche'&& $day_name!='Samedi') {
                            echo '<td style="vertical-align: middle" class="text-center">'.$day_name.'<br/>'. $day_num.'</td>';
                                }
                        
                             $date_utilisation = date("Y-m-d", strtotime("+1 day", strtotime($date_utilisation)));
                          }
        
        
                $date =  date("Y-m-d", strtotime("+1 month", strtotime($date)));
                $end = date("t", strtotime($date));
              
              }}
        echo "</tr>";
         ?>

<div class="card">
    <div class="card-header"><h2>Calendrier Réunions</h2></div>
    <div class="card-body" style="width: 100%;overflow-x: scroll;">
         <table class="table table-bordered">
         <tr>
              <th rowspan='3' style="vertical-align: middle" class="text-center">Collaborateurs</th>
                  
                    <th colspan={{ $z }} class="text-center"> {{ $input }}</th> 
                    {{affiche_mois_anne($date)}}
      

         </tr>
         @foreach ($collaborateurs as $collaborateur)
     
         <tr style="vertical-align: middle"> 
             <th style="vertical-align: middle" class="text-center"> {{$collaborateur->nom_collaborateur}}<br>{{$collaborateur->prenom_collaborateur }}</th>
           
            @foreach ( $period as $p)
                 @foreach ($reunions as $reunion)

                 @if( $collaborateur->id== $reunion->collaborateur_id)
           
                      @if(date("Y-m-d", strtotime($reunion->date_replanification))==$p->format("Y-m-d")) 
                      @php($date_replanification
                      =$p->format("Y-m-d"))
                   

                        @elseif(date("Y-m-d", strtotime($reunion->date_planifiee))==$p->format("Y-m-d")&&(empty($reunion->date_replanification))) 
                    
                         @php(  ($date_planifiee=$p->format("Y-m-d")))
           

                           
                         @elseif((date("Y-m-d", strtotime($reunion->date_prevue))==$p->format("Y-m-d")&&(empty($reunion->date_replanification))&&(empty($reunion->date_planifiee))))
                        
                             @php( ($date_prevue=$p->format("Y-m-d")))
                               
                         @endif
                    @endif

         

                 @endforeach 


             @php 
                if((!empty($date_replanification
                ))) {
               
                    $final_date=$date_replanification
                     ;
                    $bgcolor='#ffb3b9';
                    $title='Date Replanification';}

                    elseif((!empty($date_planifiee))){
                       
                    $final_date=$date_planifiee;
                     $bgcolor='	#2e3e7a';
                      $title='Date planifiee';
                          }
                          elseif(!empty($date_prevue)) {
                             
                          $final_date=$date_prevue; 
                          $bgcolor='#73387c';
                          $title='Date prevue';
                     }                   
                     if($final_date==$p->format("Y-m-d")&&( date('l', strtotime($p->format("Y-m-d")))!='Saturday')&&( date('l', strtotime($p->format("Y-m-d")))!='Sunday')){
                        echo '<td bgcolor="'.$bgcolor.'"  data-toggle="tooltip" data-placement="right" title="" data-original-title="'.$title.'"></td>' ;
                             }
                         elseif(( date('l', strtotime($p->format("Y-m-d")))!='Saturday')&&( date('l', strtotime($p->format("Y-m-d")))!='Sunday')){echo "<td></td>" ;}

                   $final_date=null; 
                   $date_replanification
                   =null;
                   $date_planifiee=null;
                   $date_prevue=null;
                     
             @endphp
            @endforeach
            </tr>
         @endforeach 


        </table>
    </div>
</div>


@endsection






