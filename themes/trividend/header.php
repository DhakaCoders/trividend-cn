<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	

  <svg style="display: none;">
    <symbol id="hdr-serach-icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M16.0277 2.74617C12.3665 -0.915064 6.40754 -0.915064 2.74631 2.74617C-0.914133 6.40819 -0.914133 12.3663 2.74631 16.0284C6.00673 19.288 11.0847 19.6372 14.7435 17.0919C14.8205 17.4562 14.9967 17.8038 15.2801 18.0872L20.612 23.4191C21.389 24.1945 22.6446 24.1945 23.4176 23.4191C24.1938 22.6429 24.1938 21.3873 23.4176 20.6134L18.0857 15.2799C17.8039 14.999 17.4555 14.822 17.0912 14.745C19.6381 11.0853 19.2889 6.00818 16.0277 2.74617ZM14.3443 14.345C11.6109 17.0784 7.16232 17.0784 4.42969 14.345C1.69786 11.6115 1.69786 7.16377 4.42969 4.43035C7.16232 1.69772 11.6109 1.69772 14.3443 4.43035C17.0777 7.16377 17.0777 11.6115 14.3443 14.345Z"/>
    </symbol>
    <symbol id="fl-pre-svg" width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.333689 9.37559L7.62447 16.6664C8.0693 17.1112 8.79073 17.1112 9.23556 16.6664C9.68048 16.2215 9.68048 15.5002 9.23556 15.0553L3.88949 9.70924H23.3608C23.9899 9.70924 24.5 9.19916 24.5 8.57005C24.5 7.94104 23.9899 7.43087 23.3608 7.43087H3.88949L9.23537 2.08481C9.68029 1.63989 9.68029 0.918646 9.23537 0.473726C9.013 0.251448 8.72137 0.140081 8.42983 0.140081C8.13829 0.140081 7.84675 0.251448 7.62429 0.473726L0.333689 7.76451C-0.111231 8.20943 -0.111231 8.93067 0.333689 9.37559Z"/>
    </symbol>
    <symbol id="fl-nxt-svg" width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
      <path d="M24.1663 9.37559L16.8755 16.6664C16.4307 17.1112 15.7093 17.1112 15.2644 16.6664C14.8195 16.2215 14.8195 15.5002 15.2644 15.0553L20.6105 9.70924H1.13919C0.510082 9.70924 0 9.19916 0 8.57005C0 7.94104 0.510082 7.43087 1.13919 7.43087H20.6105L15.2646 2.08481C14.8197 1.63989 14.8197 0.918646 15.2646 0.473726C15.487 0.251448 15.7786 0.140081 16.0702 0.140081C16.3617 0.140081 16.6532 0.251448 16.8757 0.473726L24.1663 7.76451C24.6112 8.20943 24.6112 8.93067 24.1663 9.37559Z"/>
    </symbol>
    <symbol id="contact-map-svg" width="16" height="20" viewBox="0 0 16 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.0815 1.82251C12.1593 1.06744 11.0811 0.526441 9.9245 0.238531C8.76794 -0.0493785 7.5619 -0.0770226 6.39336 0.157593C4.89087 0.465633 3.5086 1.19908 2.4112 2.27056C1.31379 3.34204 0.547522 4.70639 0.203658 6.20108C-0.140206 7.69578 -0.0471656 9.25782 0.471695 10.7011C0.990556 12.1444 1.91337 13.4082 3.1302 14.3418C4.5195 15.3587 5.70237 16.6308 6.61559 18.0903L7.23782 19.125C7.31685 19.2564 7.42853 19.3652 7.56202 19.4407C7.69551 19.5162 7.84626 19.5558 7.99961 19.5558C8.15297 19.5558 8.30372 19.5162 8.4372 19.4407C8.57069 19.3652 8.68237 19.2564 8.7614 19.125L9.35786 18.1312C10.1531 16.7333 11.2374 15.5211 12.5384 14.5756C13.5585 13.8737 14.4015 12.9444 15.001 11.861C15.6005 10.7776 15.94 9.56964 15.9927 8.33254C16.0455 7.09543 15.81 5.86299 15.305 4.73245C14.7999 3.60191 14.039 2.60421 13.0824 1.81806L13.0815 1.82251ZM7.99872 11.5569C7.29549 11.5569 6.60805 11.3484 6.02333 10.9577C5.43861 10.567 4.98288 10.0117 4.71377 9.36195C4.44465 8.71224 4.37424 7.99733 4.51143 7.30761C4.64862 6.61789 4.98726 5.98434 5.48452 5.48707C5.98179 4.98981 6.61534 4.65117 7.30506 4.51398C7.99478 4.37679 8.70969 4.4472 9.3594 4.71632C10.0091 4.98543 10.5644 5.44116 10.9551 6.02588C11.3458 6.6106 11.5543 7.29804 11.5543 8.00127C11.5543 8.94428 11.1797 9.84866 10.5129 10.5155C9.84611 11.1823 8.94173 11.5569 7.99872 11.5569Z"/>
    </symbol>
    <symbol id="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16"  xmlns="http://www.w3.org/2000/svg">
    <path d="M15.4853 11.52C15.4416 11.4853 12.2667 9.1968 11.3952 9.36107C10.9792 9.43467 10.7413 9.7184 10.264 10.2864C10.1872 10.3781 10.0027 10.5979 9.8592 10.7541C9.55754 10.6557 9.26329 10.536 8.97867 10.3957C7.50961 9.68054 6.32266 8.49359 5.60747 7.02453C5.46713 6.73996 5.34736 6.44569 5.24907 6.144C5.40587 6 5.6256 5.81547 5.71947 5.73653C6.2848 5.26187 6.56907 5.024 6.64267 4.60693C6.7936 3.74293 4.50667 0.546133 4.48267 0.517333C4.37891 0.369104 4.24349 0.245793 4.08623 0.156322C3.92896 0.06685 3.75377 0.013455 3.57333 0C2.6464 0 0 3.43307 0 4.0112C0 4.0448 0.0485334 7.46027 4.26027 11.7445C8.54027 15.9515 11.9552 16 11.9888 16C12.5675 16 16 13.3536 16 12.4267C15.9867 12.2469 15.9336 12.0723 15.8446 11.9155C15.7556 11.7587 15.6329 11.6236 15.4853 11.52Z" />
    </symbol>
    <symbol id="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13"  xmlns="http://www.w3.org/2000/svg">
    <path d="M8.00001 5.496L15.568 1.056C15.3501 0.733645 15.0572 0.46909 14.7143 0.285129C14.3715 0.101167 13.9891 0.00331403 13.6 2.29084e-07H2.40002C2.00896 -0.000170615 1.62378 0.0952189 1.278 0.277869C0.932222 0.46052 0.636311 0.724897 0.416016 1.048L8.00001 5.496Z"/>
    <path d="M8.8 6.87194C8.55693 7.01294 8.28101 7.08744 8 7.08794C7.71972 7.08988 7.44384 7.01815 7.2 6.87994L0 2.66394V10.3999C0 11.0365 0.252856 11.6469 0.702944 12.097C1.15303 12.5471 1.76348 12.7999 2.4 12.7999H13.6C14.2365 12.7999 14.847 12.5471 15.2971 12.097C15.7471 11.6469 16 11.0365 16 10.3999V2.66394L8.8 6.87194Z"/>
    </symbol>
    <symbol id="contact-btw-svg" width="31" height="11" viewBox="0 0 31 11" xmlns="http://www.w3.org/2000/svg">
    <path d="M6.076 4.862C6.72 4.98333 7.24267 5.22133 7.644 5.576C8.05467 5.93067 8.26 6.46267 8.26 7.172C8.26 8.208 7.88667 8.94067 7.14 9.37C6.40267 9.79 5.36667 10 4.032 10H0.91V0.298H3.654C5.01667 0.298 6.05733 0.494 6.776 0.886C7.49467 1.26867 7.854 1.89867 7.854 2.776C7.854 3.34533 7.68133 3.80733 7.336 4.162C7 4.50733 6.58 4.74067 6.076 4.862ZM3.206 1.922V4.176H4.06C5.03067 4.176 5.516 3.784 5.516 3C5.516 2.608 5.38533 2.33267 5.124 2.174C4.86267 2.006 4.44733 1.922 3.878 1.922H3.206ZM4.046 8.334C4.65267 8.334 5.11 8.24533 5.418 8.068C5.73533 7.88133 5.894 7.54067 5.894 7.046C5.894 6.15 5.334 5.702 4.214 5.702H3.206V8.334H4.046ZM15.9132 0.298L15.6892 2.062H13.2952V10H10.9992V2.062H8.49319V0.298H15.9132ZM27.6457 0.298L26.0217 10H23.0397L21.8357 2.594L20.5617 10H17.6497L16.0537 0.298H18.3497L19.3157 8.264L20.6597 0.298H23.0677L24.3277 8.264L25.4617 0.298H27.6457ZM29.4613 7.704C29.8066 7.704 30.1006 7.83 30.3433 8.082C30.5953 8.32467 30.7213 8.61867 30.7213 8.964C30.7213 9.31867 30.5953 9.622 30.3433 9.874C30.1006 10.1167 29.8066 10.238 29.4613 10.238C29.1066 10.238 28.8033 10.1167 28.5513 9.874C28.3086 9.622 28.1873 9.31867 28.1873 8.964C28.1873 8.61867 28.3086 8.32467 28.5513 8.082C28.8033 7.83 29.1066 7.704 29.4613 7.704ZM29.4613 2.86C29.8066 2.86 30.1006 2.986 30.3433 3.238C30.5953 3.48067 30.7213 3.77467 30.7213 4.12C30.7213 4.47467 30.5953 4.778 30.3433 5.03C30.1006 5.27267 29.8066 5.394 29.4613 5.394C29.1066 5.394 28.8033 5.27267 28.5513 5.03C28.3086 4.778 28.1873 4.47467 28.1873 4.12C28.1873 3.77467 28.3086 3.48067 28.5513 3.238C28.8033 2.986 29.1066 2.86 29.4613 2.86Z"/>
    </symbol>

    <symbol id="cotact-facebook-svg" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.75464 0C4.2989 0 0.673828 3.58882 0.673828 8C0.673828 12.4109 4.2989 16 8.75464 16C13.2101 16 16.8354 12.4109 16.8354 8C16.8354 3.58882 13.2107 0 8.75464 0ZM10.7643 8.28164H9.44957V12.9206H7.50147C7.50147 12.9206 7.50147 10.3859 7.50147 8.28164H6.57543V6.64207H7.50147V5.58157C7.50147 4.82204 7.86603 3.63522 9.46748 3.63522L10.9111 3.6407V5.23226C10.9111 5.23226 10.0338 5.23226 9.86328 5.23226C9.69272 5.23226 9.45022 5.31668 9.45022 5.67888V6.64239H10.9345L10.7643 8.28164Z"/>
    </symbol>
    <symbol id="contact-twiter-svg" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.97852 0C4.56733 0 0.978516 3.58882 0.978516 8C0.978516 12.4109 4.56733 16 8.97852 16C13.3894 16 16.9785 12.4109 16.9785 8C16.9785 3.58882 13.39 0 8.97852 0ZM12.5474 6.16902C12.5509 6.24829 12.5528 6.3282 12.5528 6.40812C12.5528 8.84138 10.7012 11.6462 7.31349 11.6462C6.27361 11.6462 5.30559 11.3423 4.49096 10.8196C4.635 10.8367 4.78163 10.8454 4.93018 10.8454C5.79315 10.8454 6.58683 10.5509 7.21714 10.0572C6.41153 10.0424 5.73127 9.51003 5.497 8.77822C5.60914 8.79948 5.72483 8.81141 5.84309 8.81141C6.01098 8.81141 6.17404 8.78949 6.32839 8.74728C5.48605 8.57843 4.85155 7.83437 4.85155 6.94175C4.85155 6.93402 4.85155 6.92596 4.85187 6.91855C5.1 7.05615 5.3839 7.13929 5.68552 7.14863C5.19184 6.81898 4.8667 6.25506 4.8667 5.61637C4.8667 5.27866 4.95725 4.96222 5.11579 4.69024C6.02355 5.80456 7.38084 6.53734 8.91084 6.61468C8.87926 6.47966 8.86347 6.33948 8.86347 6.1948C8.86347 5.17812 9.68777 4.3535 10.7044 4.3535C11.2342 4.3535 11.7121 4.57714 12.0485 4.93483C12.4684 4.85233 12.8615 4.69959 13.2183 4.48788C13.0797 4.91807 12.7887 5.27866 12.4075 5.50681C12.7803 5.46234 13.1361 5.36373 13.4651 5.21711C13.2196 5.58576 12.9073 5.91025 12.5474 6.16902Z"/>
    </symbol>

    <symbol id="contact-ins-svg" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.20204 9.60153C9.09357 9.60153 9.82041 8.88325 9.82041 7.99998C9.82041 7.65132 9.70518 7.3294 9.51444 7.06645C9.22052 6.663 8.74269 6.39844 8.20301 6.39844C7.66301 6.39844 7.18551 6.66268 6.89093 7.06612C6.69954 7.32907 6.58529 7.651 6.58496 7.99966C6.58399 8.88293 7.31017 9.60153 8.20204 9.60153Z"/>
    <path d="M11.7339 6.04055V4.69808V4.49829L11.5312 4.49894L10.1758 4.50312L10.181 6.0457L11.7339 6.04055Z"/>
    <path d="M8.2019 0C3.74616 0 0.121094 3.58882 0.121094 8C0.121094 12.4109 3.74616 16 8.2019 16C12.6573 16 16.2827 12.4109 16.2827 8C16.2827 3.58882 12.658 0 8.2019 0ZM12.7976 7.06646V10.7916C12.7976 11.7619 12.0008 12.5504 11.0214 12.5504H5.38244C4.40269 12.5504 3.6062 11.7619 3.6062 10.7916V7.06646V5.20905C3.6062 4.2391 4.40269 3.45058 5.38244 3.45058H11.021C12.0008 3.45058 12.7976 4.2391 12.7976 5.20905V7.06646Z"/>
    <path d="M10.7154 7.99994C10.7154 9.37173 9.58786 10.4886 8.20156 10.4886C6.81527 10.4886 5.68807 9.37173 5.68807 7.99994C5.68807 7.66997 5.75447 7.35449 5.87295 7.06641H4.50098V10.7915C4.50098 11.273 4.89581 11.6629 5.38177 11.6629H11.0204C11.5057 11.6629 11.9012 11.273 11.9012 10.7915V7.06641H10.5285C10.648 7.35449 10.7154 7.66997 10.7154 7.99994Z"/>
    </symbol>
    <symbol id="fl-pre-svg" width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.333689 9.37559L7.62447 16.6664C8.0693 17.1112 8.79073 17.1112 9.23556 16.6664C9.68048 16.2215 9.68048 15.5002 9.23556 15.0553L3.88949 9.70924H23.3608C23.9899 9.70924 24.5 9.19916 24.5 8.57005C24.5 7.94104 23.9899 7.43087 23.3608 7.43087H3.88949L9.23537 2.08481C9.68029 1.63989 9.68029 0.918646 9.23537 0.473726C9.013 0.251448 8.72137 0.140081 8.42983 0.140081C8.13829 0.140081 7.84675 0.251448 7.62429 0.473726L0.333689 7.76451C-0.111231 8.20943 -0.111231 8.93067 0.333689 9.37559Z"/>
    </symbol>
    <symbol id="fl-nxt-svg" width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
      <path d="M24.1663 9.37559L16.8755 16.6664C16.4307 17.1112 15.7093 17.1112 15.2644 16.6664C14.8195 16.2215 14.8195 15.5002 15.2644 15.0553L20.6105 9.70924H1.13919C0.510082 9.70924 0 9.19916 0 8.57005C0 7.94104 0.510082 7.43087 1.13919 7.43087H20.6105L15.2646 2.08481C14.8197 1.63989 14.8197 0.918646 15.2646 0.473726C15.487 0.251448 15.7786 0.140081 16.0702 0.140081C16.3617 0.140081 16.6532 0.251448 16.8757 0.473726L24.1663 7.76451C24.6112 8.20943 24.6112 8.93067 24.1663 9.37559Z"/>
    </symbol>

    <symbol id="fl-pgnt-prev-svg" width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.217918 6.03129L4.97925 10.7926C5.26975 11.0831 5.74088 11.0831 6.03138 10.7926C6.32194 10.5021 6.32194 10.031 6.03138 9.74049L2.54008 6.24918H15.256C15.6669 6.24918 16 5.91607 16 5.50523C16 5.09444 15.6669 4.76127 15.256 4.76127H2.54008L6.03126 1.26996C6.32182 0.979404 6.32182 0.508389 6.03126 0.21783C5.88604 0.0726681 5.69559 -6.10352e-05 5.5052 -6.10352e-05C5.3148 -6.10352e-05 5.12441 0.0726681 4.97913 0.21783L0.217918 4.97916C-0.0726414 5.26972 -0.0726414 5.74073 0.217918 6.03129Z"/>
    </symbol>

    <symbol id="fl-pgnt-next" width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.7821 6.03129L11.0208 10.7926C10.7303 11.0831 10.2591 11.0831 9.96862 10.7926C9.67806 10.5021 9.67806 10.031 9.96862 9.74049L13.4599 6.24918H0.743958C0.333115 6.24918 0 5.91607 0 5.50523C0 5.09444 0.333115 4.76127 0.743958 4.76127H13.4599L9.96874 1.26996C9.67818 0.979404 9.67818 0.508389 9.96874 0.21783C10.114 0.0726681 10.3044 -6.10352e-05 10.4948 -6.10352e-05C10.6852 -6.10352e-05 10.8756 0.0726681 11.0209 0.21783L15.7821 4.97916C16.0726 5.26972 16.0726 5.74073 15.7821 6.03129Z"/>
    </symbol>
    <symbol id="backlink-arrow-svg" width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.217918 6.03129L4.97925 10.7926C5.26975 11.0831 5.74088 11.0831 6.03138 10.7926C6.32194 10.5021 6.32194 10.031 6.03138 9.74049L2.54008 6.24918H15.256C15.6669 6.24918 16 5.91607 16 5.50523C16 5.09444 15.6669 4.76127 15.256 4.76127H2.54008L6.03126 1.26996C6.32182 0.979404 6.32182 0.508389 6.03126 0.21783C5.88604 0.0726681 5.69559 -6.10352e-05 5.5052 -6.10352e-05C5.3148 -6.10352e-05 5.12441 0.0726681 4.97913 0.21783L0.217918 4.97916C-0.0726414 5.26972 -0.0726414 5.74073 0.217918 6.03129Z"/>
    </symbol>
  </svg>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>
  <div class="bdoverlay"></div>
  <header class="header">
    <div class="container-xlg">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr">
            <div class="header-left">
              <?php if( !empty( $logo_tag ) ) :?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="header-right">
              <div class="header-menu">
                <nav class="main-nav">
                    <?php 
                      $mmenuOptions = array( 
                          'theme_location' => 'cbv_main_menu', 
                          'menu_class' => 'clearfix reset-list',
                          'container' => 'mnav',
                          'container_class' => 'mnav',
                          'depth' => 2,
                        );
                      wp_nav_menu( $mmenuOptions ); 
                    ?>
                </nav>
              </div>
              <div class="hdr-search">
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                  <div class="hdr-search-inr">
                    <input type="text" placeholder="Zoeken" name="s" value="<?php echo get_search_query(); ?>">
                    <button>
                      <i>
                        <svg class="hdr-serach-icon" width="24" height="24" viewBox="0 0 24 24" fill="#E0861A">
                          <use xlink:href="#hdr-serach-icon"></use>
                        </svg>
                      </i>
                    </button>
                  </div>
                </form>
                <button class="hdr-search-btn">
                  <i>
                    <svg class="hdr-serach-icon" width="24" height="24" viewBox="0 0 24 24" fill="#E0861A">
                      <use xlink:href="#hdr-serach-icon"></use>
                    </svg>
                  </i>
                </button>
              </div>
              <div class="xs-humberger-cntlr">
                <div class="humberger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <strong class="humberger-title humberger-cmn-title">menu</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

<div class="xs-mbl-menu-cntlr">
  <div class="xs-mbl-menu-top-wrap">
    <div class="xs-mbl-menu-top">
      <?php if( !empty( $logo_tag ) ) :?>
      <div class="xs-mmt-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php echo $logo_tag; ?>
        </a>
      </div>
      <?php endif; ?>
      <div class="xs-mmt-close-icon">
        <div class="close-icon humberger-icon">
          <span></span>
          <span></span>
        </div>
        <strong class="close-title humberger-cmn-title">Sluiten</strong>
      </div>
    </div>
    <div class="xs-mbl-menu-srch">
      <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
      <input type="text" placeholder="Zoeken" name="s" value="<?php echo get_search_query(); ?>">
      <button>
        <i>
          <svg class="hdr-serach-icon" width="24" height="24" viewBox="0 0 24 24" fill="#E0861A">
            <use xlink:href="#hdr-serach-icon"></use>
          </svg>
        </i>
      </button>
      </form>
    </div>
  </div>

  <div class="xs-mbl-menu">
    <nav class="main-nav">
      <?php 
        $mmenuOptions = array( 
            'theme_location' => 'cbv_main_menu', 
            'menu_class' => 'clearfix reset-list',
            'container' => 'mnav',
            'container_class' => 'mnav',
            'depth' => 2,
          );
        wp_nav_menu( $mmenuOptions ); 
      ?>
    </nav>
  </div>
</div>
