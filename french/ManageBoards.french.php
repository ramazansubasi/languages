<?php
// Version: 2.0; ManageBoards

$txt['boards_and_cats'] = 'Gestion des Sections et des Catégories';
$txt['order'] = 'Ordre';
$txt['full_name'] = 'Nom complet';
$txt['name_on_display'] = 'C\'est le nom qu\'elle portera.';
$txt['boards_and_cats_desc'] = 'Modifiez vos catégories et sections ici. Listez les modérateurs comme ceci <em>&quot;identifiant&quot;, &quot;identifiant&quot;</em>. (Utilisez les identifiants des membres, pas leurs pseudonymes!)<br>Pour créer une nouvelle section, cliquez sur le bouton Ajouter une section. Pour faire une sous-section, choisissez "Sous-section de..." dans la liste déroulante d\'ordre lors de la création d\'une section.';
$txt['parent_members_only'] = 'Membres inscrits';
$txt['parent_guests_only'] = 'Invités';
$txt['catConfirm'] = 'Voulez-vous vraiment effacer cette catégorie ?';
$txt['boardConfirm'] = 'Voulez-vous vraiment effacer cette section ?';

$txt['catEdit'] = 'Modifier la catégorie';
$txt['collapse_enable'] = 'Rétractable';
$txt['collapse_desc'] = 'Permet aux membres de réduire cette catégorie';
$txt['catModify'] = '(modifier)';

$txt['mboards_order_after'] = 'Après ';
$txt['mboards_order_inside'] = 'Dans ';
$txt['mboards_order_first'] = 'À la première place';

$txt['mboards_new_board'] = 'Ajouter une section';
$txt['mboards_new_cat_name'] = 'Nouvelle catégorie';
$txt['mboards_add_cat_button'] = 'Ajouter la catégorie';
$txt['mboards_new_board_name'] = 'Nouvelle section';

$txt['mboards_name'] = 'Nom';
$txt['mboards_modify'] = 'modifier';
$txt['mboards_permissions'] = 'Permissions';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Êtes-vous sûr de vouloir changer le fonctionnement de cette section pour utiliser des permissions locales ?';

$txt['mboards_delete_cat'] = 'Effacer cette catégorie';
$txt['mboards_delete_board'] = 'Effacer cette section';

$txt['mboards_delete_cat_contains'] = 'Supprimer cette catégorie effacera aussi les sections suivantes, ainsi que leurs sujets, messages et fichiers joints&#8239;';
$txt['mboards_delete_option1'] = 'Supprimer la catégorie et toutes les sections qu\'elle contient.';
$txt['mboards_delete_option2'] = 'Supprimer la catégorie et transférer toutes ses sections vers&#8239;';
$txt['mboards_delete_board_contains'] = 'Supprimer cette section déplacera les sous-sections suivantes, ainsi que tous les sujets, messages et fichiers joints qu\'elles contiennent&#8239;';
$txt['mboards_delete_board_option1'] = 'Supprimer la section et déplacer les sous-sections au niveau de la catégorie.';
$txt['mboards_delete_board_option2'] = 'Supprimer la section et déplacer les sous-sections dans&#8239;';
$txt['mboards_delete_what_do'] = 'Veuillez sélectionner ce que vous désirez faire avec ces sections&#8239;';
$txt['mboards_delete_confirm'] = 'Confirmer';
$txt['mboards_delete_cancel'] = 'Annuler';

$txt['mboards_category'] = 'Catégorie';
$txt['mboards_description'] = 'Description';
$txt['mboards_description_desc'] = 'Une courte description de cette section.';
$txt['mboards_groups'] = 'Groupes autorisés';
$txt['mboards_groups_desc'] = 'Groupes autorisés à voir et à accéder à cette section.<br><em>Si un membre est dans un des groupes autorisés ou que &quot;Membres inscrits&quot; est sélectionné, il aura accès à la section.</em>';
$txt['mboards_groups_regular_members'] = 'Ce groupe contient tous les membres à qui aucun groupe principal n\'a été attribué.';
$txt['mboards_groups_post_group'] = 'Ce groupe est attribué en fonction du nombre de messages postés.';

$txt['mboards_never'] = 'Jamais';
$txt['mboards_view_board'] = 'Qui peut voir cette section';
$txt['mboards_enter_board'] = 'Qui peut y accéder';
$txt['mboards_groups_view_enter_same'] = 'Tous les groupes pouvant voir une section peuvent aussi y accéder';
$txt['mboards_groups_need_deny_perm'] = 'Activer la possibilité d\'interdire l\'accès à un groupe particulier';
$txt['mboards_groups_everyone'] = 'Tout le monde';
$txt['mboards_groups_everyone_desc'] = 'Utilisez cette option pour sélectionner rapidement tous les groupes ci-dessous.';
$txt['mboards_offlimits_msg'] = 'Message à afficher à ceux qui peuvent voir cette section mais pas y accéder&#8239;:';

$txt['mboards_moderators'] = 'Modérateurs';
$txt['mboards_moderators_desc'] = 'Membres ayant des privilèges de modérateur local sur cette section seulement. Les administrateurs et les modérateurs globaux n\'ont pas à être listés ici.';
$txt['mboards_count_posts'] = 'Comptabiliser les messages';
$txt['mboards_count_posts_desc'] = 'Les nouveaux messages et sujets font augmenter le compteur de messages des membres.';
$txt['mboards_unchanged'] = 'Inchangé';
$txt['mboards_skin'] = 'Style de la section';
$txt['mboards_skin_desc'] = 'Permet de donner un aspect visuel différent à cette section.';
$txt['mboards_skin_mobile'] = 'Style mobile';
$txt['mboards_skin_mobile_desc'] = 'Même chose, mais appliquée aux navigateurs mobiles.';
$txt['mboards_skin_default'] = '(Réglage par défaut)';
$txt['mboards_override_skin'] = 'Outrepasser le style choisi par le membre';
$txt['mboards_override_skin_desc'] = 'Force le changement du style de cette section pour celui spécifié précédemment, même si le membre a choisi de ne pas utiliser les réglages par défaut du forum.';
$txt['mboards_language'] = 'Langue de la section';
$txt['mboards_language_desc'] = 'Vous permet d\'outrepasser la langue par défaut du forum (par exemple les boutons et menus) à l\'intérieur d\'une section. Veuillez noter que les préférences de langue de l\'utilisateur garderont la priorité.';

$txt['mboards_type'] = 'Type de section';
$txt['mboards_type_desc'] = 'Ce paramètre modifie l\'affichage de la page d\'accueil de la section. "Forum" montre une table avec la liste de sujets triée par date. "Blog" montre directement le premier message de chaque sujet, trié par la date du message en question, et non la date du dernier commentaire.';

$txt['mboards_redirect'] = 'Rediriger vers une adresse web';
$txt['mboards_redirect_desc'] = 'Activer cette option pour rediriger la section vers une autre adresse web.';
$txt['mboards_redirect_url'] = 'Adresse de redirection';
$txt['mboards_redirect_url_desc'] = 'Exemple&#8239;: &quot;http://wedge.org&quot;.';
$txt['mboards_redirect_newtab'] = 'Ouvrir l\'adresse de redirection dans un nouvel onglet';
$txt['mboards_redirect_reset'] = 'Remettre à zéro le compteur de redirections';
$txt['mboards_redirect_reset_desc'] = 'Sélectionner ceci remettra à zéro le compteur de redirections de cette section.';
$txt['mboards_current_redirects'] = 'Actuellement&#8239;: %1$s';
$txt['mboards_redirect_disabled'] = 'Note&#8239;: la section doit être vide de sujets pour activer cette option.';
$txt['mboards_redirect_disabled_recycle'] = 'Note&#8239;: la section de recyclage ne peut pas être définie comme section de redirection.';

$txt['mboards_order_before'] = 'Avant ';
$txt['mboards_order_child_of'] = 'Sous-section de ';
$txt['mboards_order_in_category'] = 'Dans la catégorie';
$txt['mboards_current_position'] = 'Position actuelle';
$txt['no_valid_parent'] = 'La section %1$s n\'a pas de section parente valide. Demandez à l\'administrateur d\'utiliser la fonction \'Chercher et réparer les erreurs\' du panneau <em>Maintenance du forum</em> pour corriger cela.';

$txt['mboards_recycle_disabled_delete'] = 'Note&#8239;: vous devez choisir une nouvelle section de recyclage, ou désactiver le recyclage avant de supprimer cette section.';

$txt['mboards_settings_desc'] = 'Modifier les paramètres généraux des catégories et des sections.';
$txt['groups_manage_boards'] = 'Groupes de membres autorisés à gérer les sections et catégories';
$txt['recycle_enable'] = 'Activer le recyclage des sujets effacés';
$txt['recycle_board'] = 'Section pour les sujets recyclés';
$txt['recycle_board_unselected_notice'] = 'Vous avez activé le recyclage de sujets sans spécifier où les placer. Cette fonction ne sera active qu\'après avoir indiqué la section.';
$txt['countChildPosts'] = 'Compter les messages des sous-sections dans le total des messages de leur section parente';
$txt['ignorable_boards'] = 'Quelles sections les membres peuvent-ils ignorer&#8239;?';
$txt['display_flags'] = 'Montrer les drapeaux sur la page d\'accueil&#8239;?';
$txt['flags_none'] = 'Non';
$txt['flags_specified'] = 'Uniquement pour les sections qui ont une langue par défaut';
$txt['flags_all'] = 'Oui, pour toutes les sections';
$txt['modcenter_category'] = 'Position de la catégorie de modération';
$txt['modcenter_category_first'] = 'Première de la liste';
$txt['modcenter_category_after'] = 'Après la catégorie "%1$s"';

$txt['mboards_select_destination'] = 'Sélectionner la destination pour la section \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Annuler le déplacement';
$txt['mboards_move'] = 'déplacer';

$txt['mboards_no_cats'] = 'Il n\'y a actuellement aucune section ou catégorie configurée.';
