window.onload = function () {

    // File Manager Side Menu
    var fmSidebar = $(".fm-sidebar"),
        navHeader = $(".main-header.sticky"),
        body = $("body"),
        navHeight;

    ///Create a margin top to prevent content 'jumps':
    fmSidebar.before('<div class="prevent-top"></div>');
    function preventTop() {
        navHeight = navHeader.innerHeight();
        fmSidebar.css({ "top": + navHeight + "px" });
    };
    preventTop(); //Run.

    // Toggle Sidemenu
    // openfmSidebar = () => {
    //     $(body).toggleClass("#fm-sidebar-btn");
    // }

        // click outside of sidemenu to close
    $('.app-content').on('click touchstart', function (event) {
        // event.stopPropagation();

        // closing of sidebar menu when clicking outside of it
        if (!$(event.target).closest('#fm-sidebar-btn').length) {
            var sidebarTarg = $(event.target).closest('#fm-sidebar-btn').length;
            if (!sidebarTarg) {
                $('body').removeClass('fm-sidebar-open');
            }
        }
    });

    // ______________ PerfectScrollbar
    const fmSidebarScroll = new PerfectScrollbar('.fm-sidebar', {
        useBothWheelAxes: true,
        suppressScrollX: true,
    });
}

$(document).on('click.bs.sidebar.data-api', '[data-bs-toggle="file-manager-sidebar"]', function (e) {
    var $this = $(this), href
    var target = $this.attr('data-bs-target')
        || e.preventDefault()
        || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')
    var $target = $(target)
    var data = $target.data('bs.sidebar')
    var option = data ? 'toggle' : $this.data()

    $target.sidebar(option)
  })

  $('html').on('click.bs.sidebar.autohide', function(event){
    var $this = $(event.target);
    var isButtonOrSidebar = $this.is('.sidebar, [data-bs-toggle="file-manager-sidebar"]') || $this.parents('.sidebar, [data-bs-toggle="file-manager-sidebar"]').length;
    if (isButtonOrSidebar) {
      return;
    } else {
      var $target = $('.sidebar');
      $target.each(function(i, trgt) {
        var $trgt = $(trgt);
        if($trgt.data('bs.sidebar') && $trgt.hasClass('sidebar-open')) {
            $trgt.sidebar('hide');
        }
      })
    }
  });
