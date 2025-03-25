<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherFormat extends AbstractTagGroup
{

  protected string $id = 'QuickTime:OtherFormat';

  protected string $name = 'OtherFormat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::OtherSampleDesc
       * line : 324165
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::OtherSampleDesc.QuickTime:OtherFormat',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

}
