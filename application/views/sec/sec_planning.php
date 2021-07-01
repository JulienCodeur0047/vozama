    <link rel="stylesheet" href="<?php echo base_url('assets/specs/css/fullcalendar.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/specs/css/bootstrap.css');?>" />
    <script src="<?php echo base_url('assets/specs/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/specs/js/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/specs/js/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/specs/js/fullcalendar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/specs/js/lang-all.js');?>"></script>
<script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            locale:'fr',
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay,listMonth'
            },
            events:"<?php echo base_url('secplanload'); ?>",
            selectable:true,
            selectHelper:true,
            
            select:function(start, end, allDay)
            {
                var title = prompt("Veuillez entrer le nom de Gard");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url('secplaninsert'); ?>",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Ajout Evenement Avec succes");
                        }
                    })
                }
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url:"<?php echo base_url('secplanupdate'); ?>",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Planning modifier");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url('secplanupdate'); ?>",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Planning modifier");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Voulez-vous vraiment supprimer ce planning?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url('secplandel'); ?>",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Planning supprimer');
                        }
                    })
                }
            }
        });
    });
             
    </script>
    <?php $this->load->view('theme/header_sec');?>
    </div>
    </div>
    </div>
</nav>
        <div class="container">
            <div id="calendar"></div>
        </div>
</section>