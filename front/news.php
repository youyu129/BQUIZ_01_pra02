            <div class="di"
                style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                </marquee>
                <div style="height:32px; display:block;"></div>
                <!--正中央-->
                <div style="text-align:center;">
                <span class="t botli">更多最新消息顯示區
        </span>
        <div style="width:80%;margin:auto;text-align:left">
        <?php
        $div=5;
        $all=$News->count(['sh'=>1]);
        $pages=ceil($all/$div);
        $now=$_GET['p']??1;
        $start=($now-1)*$div;
        $rows=$News->all(['sh'=>1], " LIMIT $start,$div");
        foreach($rows as $idx => $row){
            echo "<p>".($start+$idx+1).".".mb_substr($row['text'],0,20)."...</p><br>";
        }
        ?>
        </div>
        <?php
            if(($now-1)>0){
                echo "<a class='bl' style='font-size:30px;' href='?do=news&p=".($now-1)."'>&lt;&nbsp;</a>";
            }
            for ($i=1; $i <= $pages ; $i++) { 
                $size=($i==$now)?'24px':'16px';
                echo "<a href='?do=news&p=".$i."' style='font-size:$size;text-decoration: none;'> $i </a>";
            }
            if(($now+1)<=$pages){
                echo "<a class='bl' style='font-size:30px;' href='?do=news&p=".($now+1)."'>&nbsp;&gt;</a>";
            }
            ?>
                    
                    
                </div>
            </div>
            <div id="alt"
                style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
            </div>
            <script>
$(".sswww").hover(
    function() {
        $("#alt").html("" + $(this).children(".all").html() + "").css({
            "top": $(this).offset().top - 50
        })
        $("#alt").show()
    }
)
$(".sswww").mouseout(
    function() {
        $("#alt").hide()
    }
)
            </script>