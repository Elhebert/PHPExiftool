<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorCalibrationMatrix extends AbstractTagGroup
{

  protected string $id = 'IPTC:ColorCalibrationMatrix';

  protected string $name = 'ColorCalibrationMatrix';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151595
       * type : ?
       * writable : true
       * count : 
       * flags : binary
       */
      'id' => 'IPTC::NewsPhoto.IPTC:ColorCalibrationMatrix',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2050;

}
