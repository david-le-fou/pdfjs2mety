WebViewer({
    path: 'lib/', // make sure your relative path to the WebViewer/lib folder is correct
    initialDoc: 'https://pdftron.s3.amazonaws.com/downloads/pl/demo-annotated.pdf',
  }, document.getElementById('viewer'))
    .then((instance) => {
      document.getElementById('select').onchange = (e) => {
        instance.loadDocument(e.target.value);
      };

      document.getElementById('file-picker').onchange = (e) => {
        const file = e.target.files[0];
        if (file) {
          instance.loadDocument(file);
        }
      };

      document.getElementById('url-form').onsubmit = (e) => {
        e.preventDefault();
        instance.loadDocument(document.getElementById('url').value);
      };
    });

