<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title . $appName; ?></title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="Your Reliable Import Partner." />
    <link rel="canonical" href="https://ghana.magrolglobal.com" />
    
    <!-- Primary author / publisher -->
	<meta name="author" content="Magrol Global">
    
    <!-- Open Graph (Facebook, LinkedIn, other link previews) -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Magrol Global Ghana" />
    <meta property="og:description" content="Your Reliable Import Partner." />
    <meta property="og:url" content="https://ghana.magrolglobal.com/" />
    <meta property="og:site_name" content="Magrol Global" />
    
     <!-- Replace with your high-quality preview image (>=1200x630) -->
    <meta property="og:image" content="https://ghana.magrolglobal.com/assets/media/logo/logo.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Magrol Global" />
    <meta name="twitter:creator" content="@Magrol Global" />
    <meta name="twitter:title" content="Magrol Global Ghana" />
    <meta name="twitter:description" content="Your Reliable Import Partner." />
    <meta name="twitter:image" content="https://ghana.magrolglobal.com/assets/media/logo/logo.png" />

    <!-- Schema.org JSON-LD (helps some consumers understand the file) -->
    <!-- Schema.org JSON-LD: Organization + WebSite + SoftwareApplication (crypto exchange) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "https://ghana.magrolglobal.com#org",
                    "name": "Magrol Global",
                    "url": "https://ghana.magrolglobal.com",
                    "logo": "https://ghana.magrolglobal.com/assets/media/logo/logo.png",
                    "sameAs": [
                        "https://twitter.com/Menterprise",
                        "https://www.linkedin.com/company/menterprise-ghana-limited",
                        "https://www.facebook.com/MenterpriseGhanaLimited"
                    ]
                },
                {
                    "@type": "WebSite",
                    "url": "https://ghana.magrolglobal.com",
                    "name": "Magrol Global",
                    "publisher": {
                        "@id": "https://ghana.magrolglobal.com#org"
                    }
                }
            ]
        }
    </script>
    
    <!-- Optional: small inline JSON used by client (not required for social preview) -->
    <script id="menterprise-client-config" type="application/json">
        {"site":"Magrol Global","url":"https://ghana.magrolglobal.com","developer":"Magrol Global"}
    </script>

    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= PROOT; ?>assets/media/logo/logo.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= PROOT; ?>assets/media/logo/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= PROOT; ?>assets/media/logo/logo.png" />
    <link rel="manifest" href="<?= PROOT; ?>assets/media/logo/site.webmanifest" />
    <link rel="mask-icon" href="<?= PROOT; ?>assets/media/logo/block-safari-pinned-tab.svg" color="#8b3dff" />
    <link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo/logo.png" />
    <meta name="msapplication-TileColor" content="#8b3dff" />
    <meta name="msapplication-config" content="<?= PROOT; ?>assets/media/logo/tile.xml" />


	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo/logo.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/style.css">

</head>

<body>
