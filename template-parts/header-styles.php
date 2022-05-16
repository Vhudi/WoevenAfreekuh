<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style>.u-header .u-section-row-1 {
  background-image: none;
  min-height: 50px;
}
.u-header .u-text-1 {
  letter-spacing: 19px;
  font-size: 1.25rem;
  text-transform: uppercase;
  font-weight: 600;
  margin: 9px auto;
}
@media (max-width: 1199px) {
  .u-header .u-text-1 {
    margin-left: calc(((100% - 940px) / 2) + 283px);
  }
}
@media (max-width: 991px) {
  .u-header .u-text-1 {
    margin-left: calc(((100% - 720px) / 2) + 217px);
  }
}
@media (max-width: 767px) {
  .u-header .u-text-1 {
    margin-left: calc(((100% - 540px) / 2) + 163px);
  }
}
@media (max-width: 575px) {
  .u-header .u-text-1 {
    margin-left: calc(((100% - 340px) / 2) + 103px);
  }
}
.u-header .u-section-row-2 {
  background-image: none;
  min-height: 61px;
}
.u-header .u-btn-1 {
  letter-spacing: 0px;
  text-transform: uppercase;
  font-weight: normal;
  align-self: flex-end;
  margin: 0 auto 0 calc(((100% - 1141px) / 2) + 236px);
  padding: 0 30px;
}
.u-header .u-icon-1 {
  font-size: 2.0626em;
  vertical-align: 0px;
}
.u-header .u-menu-1 {
  margin: -45px calc(((100% - 1141px) / 2) + 86px) 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-block-d217-28 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-d217-30 {
  font-size: 1rem;
}
.u-header .u-image-1 {
  width: 19px;
  height: 24px;
  margin: -37px auto 0 calc(((100% - 1141px) / 2));
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-social-icons-1 {
  height: 32px;
  min-height: 16px;
  width: 116px;
  min-width: 68px;
  margin: -26px calc(((100% - 1141px) / 2) + -30px) 9px auto;
}
.u-header .u-icon-2 {
  height: 100%;
}
.u-header .u-icon-3 {
  height: 100%;
}
.u-header .u-icon-4 {
  height: 100%;
}
@media (max-width: 1199px) {
  .u-header .u-btn-1 {
    border-style: solid;
    margin-left: calc(((100% - 1140px) / 2) + 235px);
  }
  .u-header .u-menu-1 {
    margin-top: -45px;
    margin-right: calc(((100% - 1140px) / 2) + 86px);
  }
  .u-header .u-image-1 {
    width: 19px;
    margin-top: -37px;
    margin-left: calc(((100% - 1140px) / 2));
  }
}
@media (max-width: 991px) {
  .u-header .u-btn-1 {
    margin-left: calc(((100% - 720px) / 2));
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 720px) / 2) + 86px);
  }
  .u-header .u-image-1 {
    margin-left: calc(((100% - 720px) / 2));
  }
}
@media (max-width: 767px) {
  .u-header .u-btn-1 {
    margin-left: calc(((100% - 540px) / 2));
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 540px) / 2) + 86px);
  }
  .u-header .u-image-1 {
    margin-left: calc(((100% - 540px) / 2));
  }
}
@media (max-width: 575px) {
  .u-header .u-btn-1 {
    margin-left: calc(((100% - 340px) / 2));
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 340px) / 2) + 86px);
  }
  .u-header .u-image-1 {
    margin-left: calc(((100% - 340px) / 2));
  }
}</style>
