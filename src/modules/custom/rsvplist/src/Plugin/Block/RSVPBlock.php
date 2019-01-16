<?php
/**
 * @file
 * Contains \Drupal\rsvplist\Plugin\Block\RSVPBlock
 */
namespace Drupal\rsvplist\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\devel\Plugin\Devel\Dumper\VarDumper;

/**
 * Provides a 'RSVP' List Block
 *
 * @Block(
 *   id = "rsvp_block",
 *   admin_label = @Translation("RSVP Block"),
 *   category = @Translation("Blocks")
 * )
 */

class RSVPBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build()
  {
//    return array('#markup' => $this->t('My RSVP list '));
    return \Drupal::formBuilder()->getForm('Drupal\rsvplist\Form\RSVPForm');
  }

  /**
   * {@inheritdoc}
   */
  public function blockAccess(AccountInterface $account)
  {
    /** @var \Drupal\node\Entity\Node $node */
    $node = \Drupal::routeMatch()->getParameter('node');
//    dump('driss',$node) ; die();
    if(isset($node)) {
      $nid = $node->nid->value;
      if (is_numeric($nid)) {
        return AccessResult::allowedIfHasPermission($account, 'view rsvplist');
      }
    }
    return AccessResult::forbidden();
  }
}

