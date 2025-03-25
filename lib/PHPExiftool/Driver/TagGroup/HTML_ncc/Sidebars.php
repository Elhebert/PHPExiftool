<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_ncc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sidebars extends AbstractTagGroup
{

  protected string $id = 'HTML-ncc:Sidebars';

  protected string $name = 'Sidebars';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::ncc
       * line : 143025
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::ncc.HTML-ncc:Sidebars',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
