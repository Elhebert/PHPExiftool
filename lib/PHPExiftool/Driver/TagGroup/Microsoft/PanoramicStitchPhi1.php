<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanoramicStitchPhi1 extends AbstractTagGroup
{

  protected string $id = 'Microsoft:PanoramicStitchPhi1';

  protected string $name = 'PanoramicStitchPhi1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Panoramic Stitch Phi 1',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Stitch
       * line : 174657
       * type : float
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Microsoft::Stitch.Microsoft:PanoramicStitchPhi1',
      'desc' => [
        'en' => 'Panoramic Stitch Phi 1',
      ],
    ],
  ];

}
