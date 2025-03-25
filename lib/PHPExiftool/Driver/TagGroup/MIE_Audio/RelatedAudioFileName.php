<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Audio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelatedAudioFileName extends AbstractTagGroup
{

  protected string $id = 'MIE-Audio:RelatedAudioFileName';

  protected string $name = 'RelatedAudioFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Audio
       * line : 162757
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Audio.MIE-Audio:RelatedAudioFileName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
