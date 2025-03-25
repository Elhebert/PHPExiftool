<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_getty;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraMakeModel extends AbstractTagGroup
{

  protected string $id = 'XMP-getty:CameraMakeModel';

  protected string $name = 'CameraMakeModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GettyImages
       * line : 397280
       * type : string
       * writable : true
       * count : 
       * flags : avoid
       */
      'id' => 'XMP::GettyImages.XMP-getty:CameraMakeModel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2049;

}
