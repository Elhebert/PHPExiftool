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
class DiffractionCorrection extends AbstractTagGroup
{

  protected string $id = 'Pentax:DiffractionCorrection';

  protected string $name = 'DiffractionCorrection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensCorr
       * line : 288544
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::LensCorr.Pentax:DiffractionCorrection',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
