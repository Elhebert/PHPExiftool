<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AVI1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InterleavedField extends AbstractTagGroup
{

  protected string $id = 'AVI1:InterleavedField';

  protected string $name = 'InterleavedField';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::AVI1
       * line : 152364
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::AVI1.AVI1:InterleavedField',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
