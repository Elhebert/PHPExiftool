<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prl;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Geography extends AbstractTagGroup
{

  protected string $id = 'XMP-prl:Geography';

  protected string $name = 'Geography';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Geography',
  ];

  protected int $count = 0;

  protected int $flags = 321;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prl
       * line : 411535
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Bag,List
       */
      'id' => 'XMP::prl.XMP-prl:Geography',
      'desc' => [
        'en' => 'Geography',
      ],
    ],
  ];

}
