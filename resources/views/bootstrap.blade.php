<meta name="color-scheme" content="light dark">

<!-- If `prefers-color-scheme` is not supported, fall back to light mode.
     In this case, inject the `light` CSS before the others, with
     no media filter so that it will be downloaded with highest priority. -->
<script>

    if (window.matchMedia("(prefers-color-scheme: dark)").media === "not all") {
        document.documentElement.style.display = "none";
        document.head.insertAdjacentHTML(
            "beforeend",
            "<link id=\"css\" rel=\"stylesheet\" href=\"../dist/css/bootstrap.css\" onload=\"document.documentElement.style.display = ''\">"
        );

    }
</script>
<!-- Load the alternate CSS first ...
     in this case the Bootstrap-Dark Variant CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-night.min.css" rel="stylesheet"
      media="(prefers-color-scheme: dark)">
<!-- and then the primary CSS last ...
     in this case the (original) Bootstrap Variant CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      media="(prefers-color-scheme: light)">
