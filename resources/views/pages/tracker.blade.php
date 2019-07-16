<?php
if(!empty($posts ))
{
    $count = 1;
    $outputhead = '';
    $outputbody = '';
    $outputtail ='';

    $outputhead .= '
    <div class="col-md-12 col-lg-12">
          <div id="tracking-pre"></div>
          <div id="tracking">
             <div class="text-center tracking-status-intransit">
                <p class="tracking-status text-tight">in transit</p>
             </div>
             <div class="tracking-list">


                ';

                foreach ($posts as $post)
                {
                  // echo $post->time;
                $body = substr(strip_tags($post->body),0,200)."...";
                $show = url('blog/'.$post->slug);
                $outputbody .=  '
                <div class="tracking-item">
                   <div class="tracking-icon status-intransit">
                      <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                         <path fill="currentColor" d="'.$post->fafa.'"></path>
                      </svg>

                   </div>
                   <div class="tracking-date">'.date($post->time).'<span></span></div>
                   <div class="tracking-content">'.$post->title.'<span>'.$body.'</span></div>
                </div>

                                ';

                }




                $outputtail .= '

                </div>
                </div>
                </div>


                                ';

                echo $outputhead;
                echo $outputbody;
                echo $outputtail;
             }

             else
             {
                echo 'Data Not Found';
             }
             ?>
