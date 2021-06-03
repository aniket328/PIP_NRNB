<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * about controller.
 *

 */
class AboutController extends AbstractController
{
	
	/**
	 * about
	 * @Route("/about/", name="about")
	 * @Route("/admin/about/", name="admin_about")
	 *
	 */
	public function aboutAction(Request $request)
	{
	
		/*
		$admin_settings = $this->getDoctrine()
		->getRepository('AppBundle:Admin_Settings')
		->find(1);

		$title = $admin_settings->getTitle();
		$short_title = $admin_settings->getShortTitle();
		$about = $admin_settings->getabout();
		$footer = $admin_settings->getFooter();
		$main_color_scheme = $admin_settings->getMainColorScheme();
        $header_color_scheme = $admin_settings->getHeaderColorScheme();
        $logo_color_scheme = $admin_settings->getLogoColorScheme();
        $button_color_scheme = $admin_settings->getButtonColorScheme();
		*/
		$title = "title";
		$short_title = "short title";
		$about = "Systematic efforts

Uetz-screen: The first mapping effort of the yeast protein interactome (Uetz et al. Nature 2000). Only the subset of PPIs detected in the high-throughput screen of an activation library (692 PPIs), are reported on this web-portal. 

 

Ito-core: The second mapping effort of the yeast interactome (Ito et al. PNAS 2001). Only PPIs from the core data (more than 3 IST hits, 841 PPIs) are reported on this web-portal. 

 

CCSB-YI1: The third systematic map (Yu et al. Science 2008), constructed at CCSB, identified 1,809 binary PPIs after three Y2H screens.

 

YeRI: Our latest mapping effort led to the identification of 1,910 PPIs after testing ~99% of the yeast proteome. This new map was constructed using a novel Y2H assay version, which uses high-copy number 2µ vectors instead of centromeric vectors used by the previously published maps (Uetz library, Ito core and YI-I).

 

The union of these four systematically generated PPI datasets is refered to as ABBI-21, for atlas of binary biophysical interactions, generated in 2021.

 

Y2H screen description of YeRI

Y2H bait and prey libraries: Yeast ORFs from the Harvard Institute of Proteomics collection were transferred by Gateway recombinational cloning (Invitrogen) into Y2H destination vectors pDEST-DB-QZ212 to generate Gal4 DNA binding domain hybrid proteins (DB-ORF) and pDEST-AD-QZ213 to generate Gal4 activation domain hybrid proteins (AD-ORF) as described previously (Dreze et al, Methods in Enzymology 2010).

 

Yeast strains: Yeast strains Y8930 (Genotype: MATa leu2-3,112 trp1-901 his3Δ200 ura3-52 gal4Δ gal80Δ GAL2::ADE2 GAL1::HIS3@LYS2 GAL7::lacZ@met2 cyh2R) and Y8800 (Genotype: MATa leu2-3,112 trp1-901 his3Δ200 ura3-52 gal4Δ gal80Δ GAL2::ADE2 GAL1::HIS3@LYS2 GAL7::lacZ@met2 cyh2R) were transformed with individual DB-ORF and AD-ORF constructs respectively.";
		$footer = "footer here";
		$main_color_scheme = "black";
		$header_color_scheme = "brown";
		$logo_color_scheme = "black";
		$button_color_scheme = "red";
		
		$login_status = false;

		/*
		$is_fully_authenticated = $this->get('security.context')
		->isGranted('IS_AUTHENTICATED_FULLY');

		if($is_fully_authenticated){
		    $login_status =  true;
		}
		*/

		$admin_status = false;

		/*
		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			$admin_status = true;
		}
		*/

		return $this->render('about.html.twig', array(
		        'title' => $title,
		        'about' => $about,
		        'main_color_scheme' => $main_color_scheme,
                'header_color_scheme' => $header_color_scheme,
                'logo_color_scheme' => $logo_color_scheme,
                'button_color_scheme' => $button_color_scheme,
		        'short_title' => $short_title,
		        'footer' => $footer,
				'login_status' => $login_status,
				'admin_status' => $admin_status,
				'page' => 'about'
		));
	

	}


}

?>
