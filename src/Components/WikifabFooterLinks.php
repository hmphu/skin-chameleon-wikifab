<?php
/**
 * File containing the Wikifab Footer class
 *
 *
 * @file
 * @ingroup   Skins
 */

namespace Skins\Chameleon\Components;

use Linker;

/**
 * ToolbarHorizontal class
 *
 * A horizontal toolbar containing standard sidebar items (toolbox, language links).
 *
 * The toolbar is an unordered list in a nav element: <nav role="navigation" id="p-tb" >
 *
 * @author Stephan Gambke
 * @since 1.0
 * @ingroup Skins
 */
class WikifabFooterLinks extends Component {

	/**
	 * Builds the HTML code for this component
	 *
	 * @return String the HTML code
	 */
	public function getHtml() {

		$ret = '
			<div class="row footer-links">		
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">				
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h4>A propos</h4>
					<ul class="list-unstyled">
						<li><a href="/index.php/Wikifab:À_propos">Qu\'est-ce que Wikifab ?</a></li>
						<li><a href="/index.php/Wikifab:Equipe">Qui sommes nous ?</a></li>
						<li><a href="/index.php/Wikifab:Communauté">Communauté</a></li>
						<li><a href="/index.php/Wikifab:Presse">Presse</a></li>
						<li><a href="/index.php/Wikifab:Fablabs">Fablabs et makerspaces</a></li>
						<li><a href="/index.php/Wikifab:Faire_un_don">Faire un don</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h4>Aide</h4>
					<ul class="list-unstyled">
						<li><a href="/index.php/Wikifab:Aide">Toute l\'aide</a></li>
						<li><a href="/index.php/Wikifab:Indispensable">L\'indispensable</a></li>
						<li><a href="/index.php/Wikifab:Politique_de_confidentialité">Politique de confidentialité</a></li>
						<li><a href="/index.php/Wikifab:Mentions_légales">Mentions légales</a></li>
						<li><a href="/index.php/Wikifab:Conditions_générales">Conditions générales</a></li>
						<li><a href="/index.php/Wikifab:Contactez_nous">Contactez-nous</a></li>
					</ul>
				</div>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-6">
					<h4>Découvrir</h4>
					<ul class="list-unstyled">
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Alimentation%20%26%20Agriculture=on">Alimentation & Agriculture</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Art%20%26%20Déco=on">Art & Déco</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Bien-être%20%26%20Santé=on">Bien-être & Santé</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Électronique=on">Électronique</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Énergie=on">Énergie</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Mobilier=on">Mobilier</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<h4>&nbsp;</h4>
					<ul class="list-unstyled">
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Musique%20%26%20Sons=on">Musique & Sons</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Robotique=on">Robotique</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Science%20%26%20Biologie=on">Science & Biologie</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Sport%20%26%20Extérieur=on">Sport & Extérieur</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Transport=on">Transport</a></li>
						<li><a href="/index.php/Spécial:WfExplore?wf-expl-area-Vêtement%20%26%20Couture=on">Vêtement & Couture</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<h4>Bonjour</h4>
					<ul class="list-unstyled">
						<li><a href="https://www.facebook.com/wikifab.org" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/wikifab_org" target="_blank">Twitter</a></li>
						<li><a href="https://instagram.com/wikifab/" target="_blank">Instagram</a></li>
						<li><a href="https://github.com/wiki-fab" target="_blank">GitHub</a></li>
						<li><a href="http://blog.wikifab.org" target="_blank">Blog</a></li>
					</ul>
				</div>
				</div>
				</div>
			</div>
		';
		return $ret;
	}
}
