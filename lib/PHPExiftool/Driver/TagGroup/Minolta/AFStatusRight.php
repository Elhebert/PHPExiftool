<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFStatusRight extends AbstractTagGroup
{

  protected string $id = 'Minolta:AFStatusRight';

  protected string $name = 'AFStatusRight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraInfoA100
       * line : 176985
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraInfoA100.Minolta:AFStatusRight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
