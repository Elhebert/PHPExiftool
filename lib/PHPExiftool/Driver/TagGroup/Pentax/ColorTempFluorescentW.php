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
class ColorTempFluorescentW extends AbstractTagGroup
{

  protected string $id = 'Pentax:ColorTempFluorescentW';

  protected string $name = 'ColorTempFluorescentW';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299808
       * type : undef
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:ColorTempFluorescentW',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
