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
class TiffMeteringImageWidth extends AbstractTagGroup
{

  protected string $id = 'Sony:TiffMeteringImageWidth';

  protected string $name = 'TiffMeteringImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag940e
       * line : 391018
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag940e.Sony:TiffMeteringImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
