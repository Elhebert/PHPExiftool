<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalFilter16 extends AbstractTagGroup
{

  protected string $id = 'Pentax:DigitalFilter16';

  protected string $name = 'DigitalFilter16';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FilterInfo
       * line : 287402
       * type : undef
       * writable : true
       * count : 17
       * flags : permanent
       */
      'id' => 'Pentax::FilterInfo.Pentax:DigitalFilter16',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 17;

  protected int $flags = 2052;

}
