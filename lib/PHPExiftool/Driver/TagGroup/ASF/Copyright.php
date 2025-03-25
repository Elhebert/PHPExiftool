<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Copyright extends AbstractTagGroup
{

  protected string $id = 'ASF:Copyright';

  protected string $name = 'Copyright';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::ContentDescr
       * line : 971
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ContentDescr.ASF:Copyright',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : ASF::ExtendedDescr
       * line : 1150
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ExtendedDescr.ASF:Copyright',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
