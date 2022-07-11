<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureMode extends AbstractTagGroup
{

  protected string $id = 'Sigma:ExposureMode';

  protected string $name = 'ExposureMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Mode',
    'fr' => 'Mode d\'exposition',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 337377
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
  ];

}
