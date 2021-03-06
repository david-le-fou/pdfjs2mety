
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="style.css" />
    <script src="lib/webviewer.min.js"></script>
    <script src="js/oldbrowser.js"></script>
    <script src="js/global.js"></script>
    <title>JavaScript PDF Viewer Demo</title>
    <script src="js/moderniz.js"></script>
  </head>
  <body>
    <header>
      <div class="title sample">Demo: PDF Viewer</div>
    </header>
    <aside>
      <h1>Controls</h1>
      <h2>Choose a file to view</h2>
      <select id="select" style="width: 100%">
        <option value="https://pdftron.s3.amazonaws.com/downloads/pl/demo-annotated.pdf">https://pdftron.s3.amazonaws.com/downloads/pl/demo-annotated.pdf</option>

        <option value="../../../samples/files/demo-annotated.pdf">../../../samples/files/demo-annotated.pdf</option>
        <option value="../../../samples/files/encrypted-foobar12.pdf">../../../samples/files/encrypted-foobar12.pdf</option>
      </select>
      <h2>Or pass a url to a document</h2>
      <form id="url-form">
        <input id="url" type="text" style="width: 100%" />
        <input type="submit" value="Submit" />
      </form>
      <h2>Or choose your own</h2>
      <input id="file-picker" type="file" accept=".pdf,.jpg,.jpeg,.png,.docx,.xlsx,.pptx,.md" />
      <hr />
    </aside>
    <div id="viewer"></div>
    <script src="js/menu.js"></script>

    <!--ga-tag-->

    <script>
      
      Modernizr.addTest('async', function() {
        try {
          var result;
          eval('let a = () => {result = "success"}; let b = async () => {await a()}; b()');
          return result === 'success';
        } catch (e) {
          return false;
        }
      });

      // test for async and fall back to code compiled to ES5 if they are not supported
      ['js/viewing.js'].forEach(function(js) {
        var script = Modernizr.async ? js : js.replace('.js', '.ES5.js');
        var scriptTag = document.createElement('script');
        scriptTag.src = script;
        scriptTag.type = 'text/javascript';
        document.getElementsByTagName('head')[0].appendChild(scriptTag);
      });
    </script>
  </body>
</html>
