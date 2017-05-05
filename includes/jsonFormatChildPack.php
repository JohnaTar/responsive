<?php 
	
	$data = isset($_REQUEST['data']) ? $_REQUEST['data'] : null;
	$field = isset($_REQUEST['field']) ? $_REQUEST['field'] : null;
	
	function lastIndexOf($string,$item){
		$index=strpos(strrev($string),strrev($item));
		if ($index){
			$index=strlen($string)-strlen($item)-$index;
			return $index;
		}
			else
			return -1;
	}
	//echo $data;
	
	$rowJson = '{"name":"Pathway","children": [';
	$spt = explode(":-", $data);
	//echo count($spt);
	$i = 0;
	
	//Metabolism
	$Carbohydrate = array();
	$Energy = array();
	$Lipid = array();
	$Nucleotide = array();
	$Amino = array();
	$OtherAmino = array();
	$Glycan = array();
	$Cofactors = array();
	$Terpenoids = array();
	$OtherBiosynthesis = array();
	$Xenobiotics = array();
	$Overview = array();

	//Genetic Information Processing
	$Transcription = array();
	$Translation = array();
	$Folding = array();
	$Replication = array();
	
	//Environmental Information Processing
	$Membrane = array();
	$Signal = array();
	$Molecules = array();

	//Cellular Processes
	$Catabolism = array();
	$Motility = array();
	$Growth = array();
	$Communication = array();
	
	//Organismal Systems
	$Immune = array();
	$Endocrine = array();
	$Circulatory = array();
	$Digestive = array();
	$Excretory = array();
	$Nervous = array();
	$Sensory = array();
	$Development = array();
	$Adaptation = array();
	
	//Human Diseases
	$Cancers = array();
	$ImmuneDiseases = array();
	$Neurodegenerative = array();
	$Substance = array();
	$Cardiovascular = array();
	$Endocrine = array();
	$Infectious = array();
	
	//Drug Development
	$Antiinfectives = array();
	$Antineoplastics = array();
	$ChronologyNervous = array();
	$OtherDrugs = array();
	
	//Undefined Group
	$undef = array();
	
	
	for($i=0;$i<count($spt);$i++){
		$txtTag = "-";
		$txtFound = "0";
		$txtVal = $spt[$i];
		if(substr($txtVal, -1) == ')'){
			$txtTag = substr($txtVal, 0, lastIndexOf($txtVal,'('));
			$txtFound = substr($txtVal, lastIndexOf($txtVal,'(')+1, lastIndexOf($txtVal,')'));
		}
	// Metabolism
		if($txtTag == "glycolysis" || $txtTag == "pentose_spac_phosphate_spac_pathway")
			$Carbohydrate[$txtTag] = $txtFound;
		else if($txtTag == "oxidative_spac_phosphorylation" || $txtTag == "nitrogen_spac_metabolism")
			$Energy[$txtTag] = $txtFound;
		else if($txtTag == "fatty_spac_acid_spac_biosynthesis" || $txtTag == "fatty_spac_acid_spac_elongation" || $txtTag == "alpha_dash_linolenic_spac_acid_spac__brcko_ala_brckc__spac_pathway" ||
			$txtTag == "fatty_spac_acid_spac_metabolism" || $txtTag == "steroid_spac_biosynthesis" || $txtTag == "sphingolipid_spac_metabolism")
			$Lipid[$txtTag] = $txtFound;
		else if($txtTag == "purine_spac_metabolism" || $txtTag == "pyrimidine_spac_metabolism")
			$Nucleotide[$txtTag] = $txtFound;
		else if($txtTag == "tryptophan_spac_metabolism")
			$Amino[$txtTag] = $txtFound;
		else if($txtTag == "glutathione_spac_metabolism")
			$OtherAmino[$txtTag] = $txtFound;
		else if($txtTag == "n_dash_glycan_spac_biosynthesis")
			$Glycan[$txtTag] = $txtFound;
		else if($txtTag == "riboflavin_spac_metabolism" || $txtTag == "vitamin_spac_b6_spac_metabolism" || $txtTag == "pantothenate_spac_and_spac_coa_spac_biosynthesis" ||
			$txtTag == "folate_spac_biosynthesis")
			$Cofactors[$txtTag] = $txtFound;
	//Genetic Information Processing
		else if($txtTag == "rna_spac_polymerase" || $txtTag == 'spliceosome')
			$Transcription[$txtTag] = $txtFound;
		//if($txtTag == "")
			//$Translation[$txtTag] = $txtFound;
		else if($txtTag == "protein_spac_export" || $txtTag == "proteasome" || $txtTag == "rna_spac_degradation")
			$Folding[$txtTag] = $txtFound;
		else if($txtTag == "dna_spac_replication" || $txtTag == "base_spac_excision_spac_repair" || $txtTag == "mismatch_spac_repair" || $txtTag == "homologous_spac_recombination")
			$Replication[$txtTag] = $txtFound;
	//Environmental Information Processing	
		else if($txtTag == "abc_spac_transporters")
			$Membrane[$txtTag] = $txtFound;
		else if($txtTag == "tcr_spac_signaling" || $txtTag == "akt_spac_signaling" || $txtTag == "cd40_spac_signaling" || $txtTag == "immune_spac_signaling_spac_pathway" || 
			$txtTag == "intracellular_spac_calcium_spac_signaling" || $txtTag == "mapk_spac_signaling" || $txtTag == "notch_spac_signaling" )
			$Signal[$txtTag] = $txtFound;
		else if($txtTag == "abc_spac_transporters" || $txtTag == "cytokine_spac_network" || $txtTag == "cell_spac_adhesion_spac_molecules_spac__brcko_cams_brckc_")
			$Molecules[$txtTag] = $txtFound;
	//Cellular Processes
		else if($txtTag == "endocytosis" || $txtTag == "phagosome" ||  $txtTag == "lysosome" ||  $txtTag == "peroxisome")
			$Catabolism[$txtTag] = $txtFound;
		else if($txtTag == "cell_spac_cycle" || $txtTag == "apoptosis")
			$Growth[$txtTag] = $txtFound;
		else if($txtTag == "tight_spac_junction" || $txtTag == "gap_spac_junction")
			$Communication[$txtTag] = $txtFound;
	//Organismal Systems
		else if($txtTag == "toll_dash_like_spac_receptor_spac_signaling_spac_pathway" || $txtTag == "antigen_spac_processing_spac_and_spac_presentation")
			$Immune[$txtTag] = $txtFound;
		else if($txtTag == "melanogenesis" || $txtTag == "renin_dash_angiotensin_spac_system")
			$Endocrine[$txtTag] = $txtFound;
		else if($txtTag == "gastric_spac_acid_spac_secretion")
			$Digestive[$txtTag] = $txtFound;
		else if($txtTag == "cholinergic_spac_synapse")
			$Nervous[$txtTag] = $txtFound;
		else
			$undef[$txtTag] = $txtFound;
	//Human Diseases
	//Drug Development
		/*if($txtTag == "cholinergic_spac_synapse")
			$OtherDrugs[$txtTag] = $txtFound;*/
		
	}
	
	
	/*
	"apoptosis(147):-cell_spac_cycle(145):-glycolysis(65):-dna_spac_replication(57):-secretory_spac_pathway(53):-_spac_modification(48):-_spac_sorting(48):-
	_spac_translocation_spac_and_spac_degradation(48):-pathways_spac_of_spac_protein_spac_folding(48):-fatty_spac_acid_spac_biosynthesis(45):-endocytosis(38):-
	rna_spac_polymerase(38):-proteasome(30):-protein_spac_export(30):-homologous_spac_recombination(29):-permeability_spac_pathways(26):-
	complement_spac_system_spac_pathway(23):-alternative_spac_pathway(21):-purine_spac_salvage_spac_pathway(19):-folate_spac_biosynthesis(18):-
	pentose_spac_phosphate_spac_pathway(17):-protein_spac_phosphorylation(15):-tight_spac_junction(15):-transport_spac_pathway(15):-peroxisome(12):-
	chromatin_spac_remodeling(11):-glutathione_spac_metabolism(11):-histone_spac_acetylation(10):-oxidative_spac_phosphorylation(10):-shikimate_spac_pathway(10):-
	signal_spac_transduction_spac_pathway(10):-non_dash_mevalonate_spac_pathway(9):-protein_spac_biosynthesis(9):-purine_spac_metabolism(9):-redox_spac_metabolism(9):-
	trail(9):-abc_spac_transporters(7):-classical_spac_pathway(7):-cytokine_spac_network(6):-initiation_spac_of_spac_translation(6):-kynurenine_spac_pathway(6):-
	lysosome(6):-mitogen_dash_activated_spac_protein_spac_kinases(6):-pyrimidine_spac_metabolism(6):-endocytic_spac_pathway(5):-fatty_spac_acid_spac_metabolism(5):-
	purine_spac_salvage_spac_pathways(5):-base_spac_excision_spac_repair(4):-fatty_spac_acid_spac_biosynthetic_spac_pathway(4):-fatty_spac_acid_spac_elongation(4):-
	rab_spac_proteins(4):-tryptophan_spac_metabolism(4):-cell_spac_death_spac_pathway(3):-coa_spac_biosynthesis(3):-imd_spac_pathway(3):-mismatch_spac_repair(3):-
	mitochondrial_spac_pathway(3):-permeability_spac_pathway(3):-rna_spac_degradation(3):-sphingolipid_spac_metabolism(3):-spliceosome(3):-tcr_spac_signaling(3):-
	translocon_spac_of_spac_exported_spac_proteins_spac__brcko_ptex_brckc_(3):-14_dash_3_dash_3_spac_protein(2):-_spac_electron_spac_carriers_spac_and_spac_reductants(2):-
	akt_spac_signaling(2):-antigen_spac_processing_spac_and_spac_presentation(2):-camp_spac_pathway(2):-cd40_spac_signaling(2):-
	fatty_spac_acid_spac_metabolic_spac_pathway(2):-heme_spac_biosynthetic_spac_pathway(2):-histone_spac_chaperones(2):-hypusine_spac_pathway(2):-
	immune_spac_signaling_spac_pathway(2):-intracellular_spac_calcium_spac_signaling(2):-jnk_spac_pathway(2):-lectin_spac_pathway(2):-lipid_spac_metabolic_spac_pathway(2):-
	mapk_spac_signaling(2):-metabolic_spac_pathway_spac_of_spac_prosthetic_spac_groups(2):-nf_dash_kappab_spac_pathways(2):-phagosome(2):-riboflavin_spac_metabolism(2):-
	2_dash_c_dash_methyl_dash_d_dash_erythritol_spac_4_dash_phosphate_spac_pathway(1):-4_dash_phosphate_spac_pathway(1):-_spac_gene_spac_expression(1):-
	_spac_protein_spac_biosynthesis(1):-_spac_repair(1):-ala_spac_pathway(1):-alpha_dash_linolenic_spac_acid_spac__brcko_ala_brckc__spac_pathway(1):-
	alpha_dash_linolenic_spac_acid_spac_metabolism(1):-anopheles_spac_imd_spac_pathway(1):-atp_spac_release_spac_pathway(1):-catabolism_spac_pathway(1):-
	cell_dash_signalling_spac_pathways(1):-cell_spac_adhesion_spac_molecules_spac__brcko_cams_brckc_(1):-cholinergic_spac_synapse(1):-clotting_spac_pathway(1):-
	coagulation_spac_pathway(1):-compartmentation_spac_of_spac_redox_spac_metabolism(1):-cox_dash_2_dash_pge_spac__brcko_2_brckc__spac_pathways(1):-
	death_spac_receptor_spac_pathway(1):-dna_spac_repair_spac_mechanisms(1):-gametocyte_dash_specific_spac_metabolic_spac_pathways(1):-gap_spac_junction(1):-
	gastric_spac_acid_spac_secretion(1):-genes_spac_of_spac_the_spac_apicoplast_spac_genome(1):-gluconeogenesis_spac_pathway(1):-
	glucose_spac_biosynthesis_spac_pathway(1):-glutamate_spac_metabolism(1):-hemozoin_spac_synthesis_spac_pathway(1):-histone_spac_lysine_spac_methylation(1):-
	inflammatory_spac_response_spac_pathway(1):-interferon_spac_pathway(1):-isoprenoid_spac_biosynthetic_spac_pathway(1):-isoprenoid_spac_metabolic_spac_pathway(1):-
	melanogenesis(1):-metabolic_spac_pathways_spac_of_spac_apicoplasts(1):-mitochondrial_spac_electron_spac_flow(1):-mrna_spac_degradation(1):-
	n_dash_glycan_spac_biosynthesis(1):-na_spac__brcko__plus__brckc__spac__dash_independent_spac_pathway(1):-nad_spac_biosynthetic_spac_pathway(1):-
	nf_dash_kappab_spac_pathway(1):-nitrogen_spac_metabolism(1):-notch_spac_signaling(1):-pantothenate_spac_and_spac_coa_spac_biosynthesis(1):-
	athways_spac_of_spac_replication(1):-pc_spac_biosynthesis_spac_pathway(1):-phosphatidylcholine_spac_metabolism(1):-phospholipase_spac_c_spac_pathway(1):-
	protein_spac_modification_spac_pathway(1):-protein_spac_modification_spac_pathway_spac_via_spac_conjugation_spac_with_spac_ubiquitin_spac_and_spac_ubiqutin_dash_like_spac_molecules(1):-
	protein_spac_prenylation_spac_pathway(1):-renin_dash_angiotensin_spac_system(1):-rnai_dash_related_spac_pathway(1):-stat3_spac_pathway(1):-
	steroid_spac_biosynthesis(1):-toll_dash_like_spac_receptor_spac_signaling_spac_pathway(1):-toll_dash_like_spac_receptors_spac__brcko_tlrs_brckc__spac__dash_signalling_spac_pathway(1):-
	transcription_spac_pathway(1):-translation_spac_initiation_spac_pathway(1):-ubiquitination_spac_pathway(1):-vitamin_spac_b6_spac_metabolism(1)"
	*/
		$rowJson .= '{"name":"Metabolism","children": [';
			$rowJson .= '{"name":"Carbohydrate Metabolism","children": [';
				$i=0;
				foreach($Carbohydrate as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Energy Metabolism","children": [';
				$i=0;
				foreach($Energy as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Lipid Metabolism","children": [';
				$i=0;
				foreach($Lipid as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Nucleotide Metabolism","children": [';
				$i=0;
				foreach($Nucleotide as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Amino Acid Metabolism","children": [';
				$i=0;
				foreach($Amino as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Metabolism of Other Amino Acids","children": [';
				$i=0;
				foreach($OtherAmino as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Glycan Biosynthesis and Metabolism","children": [';
				$i=0;
				foreach($Glycan as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Metabolism of Cofactors and Vitamins","children": [';
				$i=0;
				foreach($Cofactors as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]}";
		$rowJson .= "]},";
		$rowJson .= '{"name":"Genetic Information Processing","children": [';
			$rowJson .= '{"name":"Transcription","children": [';
				$i=0;
				foreach($Transcription as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Translation","children": [';
				$i=0;
				foreach($Translation as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Folding, Sorting and Degradation","children": [';
				$i=0;
				foreach($Folding as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Replication and Repair","children": [';
				$i=0;
				foreach($Replication as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]}";
		$rowJson .= "]},";
		$rowJson .= '{"name":"Environmental Information Processing","children": [';
			$rowJson .= '{"name":"Membrane Transport","children": [';
				$i=0;
				foreach($Membrane as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Signal Transduction","children": [';
				$i=0;
				foreach($Signal as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Signaling Molecules and Interaction","children": [';
				$i=0;
				foreach($Molecules as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]}";
			
		$rowJson .= "]},";
		$rowJson .= '{"name":"Cellular Processes","children": [';
			$rowJson .= '{"name":"Transport and Catabolism","children": [';
				$i=0;
				foreach($Catabolism as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Cell Growth and Death","children": [';
				$i=0;
				foreach($Growth as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Cell Communication","children": [';
				$i=0;
				foreach($Communication as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]}";
		$rowJson .= "]},";
		$rowJson .= '{"name":"Organismal Systems","children": [';
			$rowJson .= '{"name":"Immune System","children": [';
				$i=0;
				foreach($Immune as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Endocrine System","children": [';
				$i=0;
				foreach($Endocrine as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Digestive System","children": [';
				$i=0;
				foreach($Digestive as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]},";
			$rowJson .= '{"name":"Nervous System","children": [';
				$i=0;
				foreach($Nervous as $key => $value){
					if($i != 0) $rowJson .= ',' ;
					$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
					$i++;
				}
			$rowJson .= "]}";
		$rowJson .= "]},";
		$rowJson .= '{"name":"Undefined Group","children": [';
			$i=0;
			foreach($undef as $key => $value){
				if($i != 0) $rowJson .= ',' ;
				$rowJson .= '{"name":"'.$key.'","size":'.$value.'}';
				$i++;
			}
		$rowJson .= "]}";
	$rowJson .= "]}";
	
	//echo $i;
	echo $rowJson;
?>