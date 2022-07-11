<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BrachyAccessoryDeviceNumber extends AbstractTagGroup
{

  protected string $id = 'DICOM:BrachyAccessoryDeviceNumber';

  protected string $name = 'BrachyAccessoryDeviceNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Brachy Accessory Device Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103952
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:BrachyAccessoryDeviceNumber',
      'desc' => [
        'en' => 'Brachy Accessory Device Number',
      ],
    ],
  ];

}
