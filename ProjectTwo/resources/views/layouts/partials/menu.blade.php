<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
	<body>
	    <header>
	        <nav class="navbar navbar-expand-lg navbar-light bg-light">
	            <div class="container-fluid">
	                <a class="navbar-brand" href="#">Logo</a>
	                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
	                <div class="collapse navbar-collapse" id="navbarNav">
	                    <ul class="navbar-nav">
	                        <li class="nav-item">
	                            <a class="nav-link" href="{{ route('prin') }}">Principal</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="{{ route('inscri') }}">Inscripciones</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="{{ route('center') }}">Centro Votacion</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="{{ route('index') }}">index</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="{{ route('leader') }}">Leader</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="{{ route('zone') }}">Zone</a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>
	    </header>
	</body>
</html>

