<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MIDIUnityNote extends AbstractTagGroup
{

  protected string $id = 'RIFF:MIDIUnityNote';

  protected string $name = 'MIDIUnityNote';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Sampler
       * line : 328706
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Sampler.RIFF:MIDIUnityNote',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
