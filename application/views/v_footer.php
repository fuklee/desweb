</div><!-- /.blog-post -->
</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar nav well">
    <div class="sidebar-module">
        <h4>Bab</h4>
        <ul class="list-unstyled sidebar-right">
            <li class="scroll active" id="isi_general"><a href="#isi_general">General</a></li>
            <li class="scroll" id="isi_layout"><a href="#isi_layout">Layout</a></li>
            <li class="scroll" id="isi_composition"><a href="#isi_composition">Composition</a></li>
            <li class="scroll" id="isi_color"><a href="#isi_color">Color</a></li>
            <li class="scroll" id="isi_image"><a href="#isi_image">Image</a></li>
            <li class="scroll" id="isi_typo"><a href="#isi_typo">Typography</a></li>
        </ul>
    </div>
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<div class="blog-footer">
    <p>Blog template from <a href="http://getbootstrap.com">Bootstrap</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>bootstrap/js/jquery-2.js"></script>
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>

<script>
    var scroll_position = [{name: "#isi_general"}, {name: "#isi_layout"}, {name: "#isi_composition"},
        {name: "#isi_color"}, {name: "#isi_image"}, {name: "#isi_typo"}];
    var check = "";
    var position = "false";
    function scroll(id)
    {
        $('html, body').animate({
            scrollTop: $("#" + id).offset().top - 50
        }, 1000);
    }
    function checkview(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height() + 350;

//        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        if ((elemBottom <= docViewBottom) && (elemTop >= docViewTop))
        {
            return elem;
        }
        else
        {
            return "";
        }
    }

    $(document).ready(function() {
        $(".scroll").click(function() {
            $(".scroll").removeClass('active');
            var bab = $(this).attr('id');
            scroll(bab);
            $(this).addClass('active');
        });

        $(window).scroll(function() {
            $.each(scroll_position, function(i, val) {
                if ((checkview(val.name) != "") && (checkview(val.name) != check))
                {
                    check = checkview(val.name);
                    if (checkview("#h_isi_utama") != "")
                    {
                        $(".scroll").removeClass('active');
                        $("#isi_general.scroll").addClass('active');
                    }
                    else
                    {
                        $(".scroll").removeClass('active');
                        $(val.name + ".scroll").addClass('active');
                    }
                }
            });
            console.log($(window).scrollTop());
            if ($(window).scrollTop() >= 143)
            {
                if (position == "false")
                {
                    $(".blog-sidebar").addClass("fixed_right_50");
                    position = "true";
                }
            }
            else
            {
                if (position == "true")
                {
                    $(".blog-sidebar").removeClass("fixed_right_50");
                    position = "false";
                }
            }

        });
    });
</script>

</body>
</html>
