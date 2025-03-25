<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NikonCaptureEditVersions extends AbstractTagGroup
{

  protected string $id = 'Nikon:NikonCaptureEditVersions';

  protected string $name = 'NikonCaptureEditVersions';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199602
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Nikon::Main.Nikon:NikonCaptureEditVersions',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 199605
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:NikonCaptureEditVersions',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
