<!-- Footer Content -->

<!-- JavaScript -->
<script type="text/javascript">
	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script src="../../../public/donation_ui_files/jquery.min.js.download"></script>
<script src="../../../public/donation_ui_files/jquery.prettyphoto.js.download"></script>
<script src="../../../public/donation_ui_files/bootstrap.js.download"></script>
<script src="../../../public/donation_ui_files/owl.carousel.js.download"></script>
<script src="../../../public/donation_ui_files/jquery.easing.1.3.js.download"></script> 
<script src="../../../public/donation_ui_files/jquery.flexslider.js.download"></script>
<script src="../../../public/donation_ui_files/main.js.download"></script>
<script src="../../../public/donation_ui_files/js"></script>
<script src="../../../public/donation_ui_files/gmaps.js.download"></script>


<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
</body></html>