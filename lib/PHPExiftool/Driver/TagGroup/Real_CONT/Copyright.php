<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_CONT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Copyright extends AbstractTagGroup
{

  protected string $id = 'Real-CONT:Copyright';

  protected string $name = 'Copyright';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Copyright',
    'fr' => 'Propriétaire du copyright',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::ContentDescr
       * line : 330502
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::ContentDescr.Real-CONT:Copyright',
      'desc' => [
        'en' => 'Copyright',
        'fr' => 'Propriétaire du copyright',
      ],
    ],
  ];

}
