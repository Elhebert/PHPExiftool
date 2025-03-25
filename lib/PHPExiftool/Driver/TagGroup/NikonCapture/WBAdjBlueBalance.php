<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBAdjBlueBalance extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:WBAdjBlueBalance';

  protected string $name = 'WBAdjBlueBalance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::WBAdjData
       * line : 211581
       * type : double
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCapture::WBAdjData.NikonCapture:WBAdjBlueBalance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
