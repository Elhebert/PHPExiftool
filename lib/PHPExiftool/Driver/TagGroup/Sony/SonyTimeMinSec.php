<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SonyTimeMinSec extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyTimeMinSec';

  protected string $name = 'SonyTimeMinSec';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381439
       * type : undef
       * writable : false
       * count : 2
       * flags : permanent
       */
      'id' => 'Sony::Tag9050b.Sony:SonyTimeMinSec',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 4;

}
