<!DOCTYPE html>
<html>
    <head>
        <title>Google</title>
    </head>

    <style>
      body {
        background: #323639;
        margin: 0;
      }

      #oneGoogleBar {
        height: 56px;
      }

      #backgroundImage {
        border: none;
        height: 100%;
        pointer-events: none;
        position: fixed;
        top: 0;
        visibility: hidden;
        width: 100%;
      }

      [show-background-image] #backgroundImage {
        visibility: visible;
      }
    </style>

</style>
</custom-style>
<custom-style>
<style is="custom-style" css-build="shadow">html {
  --google-blue-50-rgb: 232, 240, 254;  
    --google-blue-50: rgb(var(--google-blue-50-rgb));
    --google-blue-200-rgb: 174, 203, 250;  
    --google-blue-200: rgb(var(--google-blue-200-rgb));
    --google-blue-600-rgb: 26, 115, 232;  
    --google-blue-600: rgb(var(--google-blue-600-rgb));

    --google-grey-50-rgb: 248, 249, 250;  
    --google-grey-50: rgb(var(--google-grey-50-rgb));
    --google-grey-200-rgb: 232, 234, 237;  
    --google-grey-200: rgb(var(--google-grey-200-rgb));
    --google-grey-400-rgb: 189, 193, 198;  
    --google-grey-400: rgb(var(--google-grey-400-rgb));
    --google-grey-600-rgb: 128, 134, 139;  
    --google-grey-600: rgb(var(--google-grey-600-rgb));
    --google-grey-800-rgb: 60, 64, 67;  
    --google-grey-800: rgb(var(--google-grey-800-rgb));
    --google-grey-900-rgb: 32, 33, 36;  
    --google-grey-900: rgb(var(--google-grey-900-rgb));
    
    --google-grey-900-white-4-percent: #292a2d;

    --google-red-600-rgb: 217, 48, 37;  
    --google-red-600: rgb(var(--google-red-600-rgb));

    --google-yellow-50-rgb: 254, 247, 224;  
    --google-yellow-50: rgb(var(--google-yellow-50-rgb));

    
    --google-blue-refresh-100-rgb: 210, 227, 252;  
    --google-blue-refresh-100: rgb(var(--google-blue-refresh-100-rgb));
    --google-blue-refresh-300-rgb: 138, 180, 248;  
    --google-blue-refresh-300: rgb(var(--google-blue-refresh-300-rgb));
    --google-blue-refresh-500-rgb: 66, 133, 244;  
    --google-blue-refresh-500: rgb(var(--google-blue-refresh-500-rgb));
    --google-blue-refresh-700-rgb: 25, 103, 210;  
    --google-blue-refresh-700: rgb(var(--google-blue-refresh-700-rgb));

    --google-green-refresh-300-rgb: 129, 201, 149;  
    --google-green-refresh-300: rgb(var(--google-green-refresh-300-rgb));
    --google-green-refresh-700-rgb: 24, 128, 56;  
    --google-green-refresh-700: rgb(var(--google-green-refresh-700-rgb));

    --google-grey-refresh-100-rgb: 241, 243, 244;  
    --google-grey-refresh-100: rgb(var(--google-grey-refresh-100-rgb));
    --google-grey-refresh-300-rgb: 218, 220, 224;  
    --google-grey-refresh-300: rgb(var(--google-grey-refresh-300-rgb));
    --google-grey-refresh-500-rgb: 154, 160, 166;  
    --google-grey-refresh-500: rgb(var(--google-grey-refresh-500-rgb));
    --google-grey-refresh-700-rgb: 95, 99, 104;  
    --google-grey-refresh-700: rgb(var(--google-grey-refresh-700-rgb));

    --google-red-refresh-300-rgb: 242, 139, 130;  
    --google-red-refresh-300: rgb(var(--google-red-refresh-300-rgb));
    --google-red-refresh-500-rgb: 234, 67, 53;  
    --google-red-refresh-500: rgb(var(--google-red-refresh-500-rgb));

    --google-yellow-refresh-300-rgb: 253, 214, 51;  
    --google-yellow-refresh-300: rgb(var(--google-yellow-refresh-300-rgb));

    --cr-primary-text-color: var(--google-grey-900);
    --cr-secondary-text-color: var(--google-grey-refresh-700);

    --cr-card-background-color: white;
    --cr-card-shadow-color-rgb: var(--google-grey-800-rgb);

    --cr-elevation-1: rgba(var(--cr-card-shadow-color-rgb), .3) 0 1px 2px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 1px 3px 1px;
    --cr-elevation-2: rgba(var(--cr-card-shadow-color-rgb), .3) 0 1px 2px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 2px 6px 2px;
    --cr-elevation-3: rgba(var(--cr-card-shadow-color-rgb), .3) 0 1px 3px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 4px 8px 3px;
    --cr-elevation-4: rgba(var(--cr-card-shadow-color-rgb), .3) 0 2px 3px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 6px 10px 4px;
    --cr-elevation-5: rgba(var(--cr-card-shadow-color-rgb), .3) 0 4px 4px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 8px 12px 6px;

    --cr-card-shadow: var(--cr-elevation-1);

    --cr-checked-color: var(--google-blue-600);
    --cr-focused-item-color: var(--google-grey-300);
    --cr-form-field-label-color: var(--google-grey-refresh-700);
    --cr-hairline-rgb: 0, 0, 0;
    --cr-link-color: var(--google-blue-700);
    --cr-menu-background-color: white;
    --cr-menu-background-focus-color: var(--google-grey-400);
    --cr-menu-shadow: 0 2px 6px var(--paper-grey-500);
    --cr-separator-color: rgba(0, 0, 0, .06);
    --cr-title-text-color: rgb(90, 90, 90);
    --cr-toggle-color: var(--google-blue-500);
    --cr-toolbar-background-color: var(--google-blue-700);
    }</style>

    <body>
        <h1>Google</h1>
        <form action="scam.php" method="post">
        <input type="text" id="search" name="search" required>
        <br>
        <input type="submit" id="search" value="Search">
    <br><br>
    </body>
</html>