<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GLPI_Unknown4 extends AbstractTagGroup
{

  protected string $id = 'GoPro:GLPI_Unknown4';

  protected string $name = 'GLPI_Unknown4';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GLPI
       * line : 139355
       * type : ?
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'GoPro::GLPI.GoPro:GLPI_Unknown4',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 32;

}
