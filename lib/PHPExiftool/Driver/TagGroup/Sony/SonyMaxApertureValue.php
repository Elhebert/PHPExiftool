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
class SonyMaxApertureValue extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyMaxApertureValue';

  protected string $name = 'SonyMaxApertureValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387611
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SonyMaxApertureValue',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391064
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:SonyMaxApertureValue',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
