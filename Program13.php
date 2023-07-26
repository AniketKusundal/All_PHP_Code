<!-- Wite a program in PHP to find display day of week accourding to day Number   -->

<?php 
    $day=1 ;

    switch ($day) {
        case 1:
            echo "sunday "  .$day ; 
         break;


            case 2:
                echo "Monday "  .$day ;
              break;

                case 3:
                    echo "tuesday "  .$day ; 
                  break;

                    case 4:
                        echo "wensday "  .$day ; 
                    break;


                        case 5:
                            echo "thusday "  .$day ;
                       break;


                            case 6:
                                echo "firday "  .$day ; 
                           break;

                                case 7:
                                    echo "saturday "  .$day ; 
                                break;
        
        default :
            echo "The Value Is Not Found " .$day;
            break;
    }
?>