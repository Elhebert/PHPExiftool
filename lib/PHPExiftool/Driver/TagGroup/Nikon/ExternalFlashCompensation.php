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
class ExternalFlashCompensation extends AbstractTagGroup
{

  protected string $id = 'Nikon:ExternalFlashCompensation';

  protected string $name = 'ExternalFlashCompensation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 194031
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:ExternalFlashCompensation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
